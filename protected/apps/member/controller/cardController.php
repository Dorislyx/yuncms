<?php
/*
 * 人脉控制器
 * */
class cardController extends commonController
{
	public function __construct()
	{
		parent::__construct();
		$this->uploadpath=ROOT_PATH.'upload/company/license/';
		$hover="class=\"current\"";//设置当前的导航状态
		$this->hover_card=$hover;
	}
	
	public function index()
	{
		//我的联系人,查询我的联系人的信息
		$id=$this->auth['id'];
		if(empty($id)) $this->redirect(url('default/index/login'));//未登录， 跳转到登录页面
		$card=model('member_card')->mycard($id);//好友分组
		$allcard=model('member_card')->count("send_id='{$id}' or rece_id='{$id}'");//联系人总数
		if(!empty($card)){
			foreach ($card as  $row=>$v)
			{
				$card[$row]=model("member")->user_profile($v['mid'],'');
			}
			$this->mycard=$card;
		}

		//查询我的联系人，分组A-Z,如何分组未解决
		//dump($card);
		$this->display();
	}
	
	//ajax添加联系人,注意已经有记录，则不添加，直接接受（注意接收人）
	public function addfriend()
	{
		$auth=$this->auth;//本地登录的cookie信息
		$data=array();
		$data['send_id']=$send_id=$auth['id'];//读取用户的id
		$data['rece_id']=$rece_id=intval($_GET['id']);
		$data['status']=1;
		$data['ctime']=time();
		
		$re=model('member_card')->find("(send_id='{$send_id}' and rece_id='{$rece_id}') or (rece_id='{$send_id}' and send_id='{$rece_id}')");
		if(empty($re))
		{
			//没有添加好友记录
			if(model("member_card")->insert($data)) echo 1;
			else echo "添加失败";
		}elseif ($re['status']==1){
			//有记录，判断是接受者还是发送者
			if(model("member_card")->find("(rece_id='{$send_id}' and send_id='{$rece_id}' and status=1)"))
			{
				//非空说明已经添加过了，直接将status设置为2，已经是朋友
				$card['status']=2;
				if(model("member_card")->update("id='".$re['id']."'",$card)) echo 2;
			}
			else echo 1;
		}
		//如果是接受者发请求，则是确定处理
		
	}
	
	//我同意别人的邀请,更新别人的申请记录，status设为2，两人互为联系人
	public function accept()
	{
		$auth=$this->auth;//本地登录的cookie信息
		$rece_id=$auth['id'];//读取用户的id
		$send_id=intval($_GET['id']);//申请人id
		$data=array();
		$data['status']=2;
		$data['ctime']=time();
		if(model("member_card")->update("send_id='{$send_id}' and rece_id='{$rece_id}'",$data)) echo 1;
		else echo "失败~";
	}

	//ajax加载名片信息
	public function loadcard()
	{
		$id=intval($_GET['id']);
		//查询用户的信息
		$info=model("member")->user_profile($id,'');
		//dump($info);
		//$html.='<dl><dt><a target="_blank" href="showuser.php?uid='.$randuser[$i]['uid'].'">';
		$url=url('profile/user',array('id'=>$id));
		$delurl=url('card/delfriend',array('id'=>$id));
		$html="";
		$html.='<div style="" class="card-type-a" id="J_cardTypeA"><div class="out"><div class="in"><div class="hd">';
		$html.='<a target="_blank" href="'.$url.'"><img src="'.$info['avatar'].'" alt=""></a></div>';
		$html.='<div class="bd"><div class="inform"><p class="com" title="'.$info['school'].'">'.$info['school'].'</p>';
		$html.='<h3 title="'.$info['uname'].'"><a target="_blank" href="">'.$info['uname'].'</a></h3> <p class="job" title="'.$info['major'].' · '.$info['city'].'">'.$info['major'].' · '.$info['city'].'</p></div>';
		$html.='<div class="plus"><p><i>Q&nbsp;Q：</i><em>'.$info['qq'].'</em></p><p><i>手机：</i><em>'.$info['tel'].'</em> </p>';
		$html.='<p> <i>邮箱：</i><em title="'.$info['login_email'].'">'.$info['login_email'].'</em></p></div></div></div></div> <div class="shadow"></div></div>';
		$html.='<div style="z-index: 1; cursor: default;" class="card-type-b" id="J_cardTypeB"> <div class="out"> <div class="in"><table> <tbody> <tr> <td id="personalTags">';
		$tag=$info['tag'];
		$count=count($tag);
		for($i=0;$i<$count;$i++){
			if($i%2==0) $html.='<span>'.$tag[$i]['name'].'</span>';//偶数
			else $html.='<span class="fav">'.$tag[$i]['name'].'</span>';//奇数
		}
	
		$html.='</td></tr></tbody></table></div></div><div class="shadow"></div></div>';
		$html.='<div class="edit-type"><p class="action"><a href="javascript:" class="send-msg" title="发私信" id="single_mail" data-id="'.$info['id'].'" username="'.$info['uname'].'"></a>';
		$html.='<a target="_blank" href="'.$url.'" title="查看档案" class="person-page"></a><a title="解除朋友关系" id="delfriend" uid="'.$info['id'].'"></a></p></div>';
		echo $html;
	}
	
	//解除好友关系,应该用ajax
	public function delfriend()
	{
		$rece_id=$this->auth['id'];//读取用户的id
		$send_id=intval($_GET['id']);//联系人的id
		$re=model('member_card')->find("send_id='$rece_id' and rece_id='$send_id'");
		if($re){
			if(model('member_card')->delete("id='".$re['id']."'")){
				//删除联系人之间的私信记录，私聊记录是双方的，此bug以后修复
				echo 1;
			}
			else "失败";
		}
		else{
			$re=model('member_card')->find("send_id='$send_id' and rece_id='$rece_id'");
			if(model('member_card')->delete("id='".$re['id']."'")) echo 1;
			else "失败~";
		}
	}
	
	//找人,查询所有的会员
	public function search()
	{
		$auth=$this->auth;//本地登录的cookie信息
		$id=$auth['id'];//读取用户的id
		$mayknow=model("member")->maybeknow($id,"9");
		$this->mayknow=$mayknow;
		$this->display();
	}
	
	//判断学历
	protected  function _edu($edu)
	{
		//学历的判断
		switch ($edu){
			case 1:
				$education="博士研究生";
				break;
			case 2:
				$education="硕士研究生";
				break;
			case 3:
				$education="本科";
				break;
			case 4:
				$education="专科";
				break;
			case 5:
				$education="其他";
				break;
		}
		return $education;
	}
	
	//ajax响应搜索用户
	public function search_result()
	{
		$id=$this->auth['id'];
		$keyword=in(trim($_POST['compositeSearchWord']));
		//多个关键字查询
		//根据keyword查询用户
		$info=model("member")->findmember($keyword);
		if($info)
		{
			foreach ($info as $row=>$v)
			{
				$info[$row]['education']=$this->_edu($v['education']);//查询出学历
				//判断是否是联系人
				$info[$row]['isfriend']=model("member_card")->find("(send_id='{$id}' and rece_id='{$v['id']}') or (rece_id='{$id}' and send_id='{$v['id']}')");
			}
		}
		//直接模板输出
		$this->count=count($info);
		$this->info=$info;
		$this->display();

	}
	
	//邀请好友注册，增加我的积分
	public function invite()
	{
		$this->display();
	}



}


