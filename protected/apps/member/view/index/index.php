{include file="header"}
<link href="__PUBLIC__/emotions/css/emotion.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/emotions/css/jquery.sinaEmotion.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/member/css/main.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/highslide.css" />
<script src="__PUBLICAPP__/js/main.js" type="text/javascript"></script>   
<script type="text/javascript" src="__PUBLIC__/emotions/js/jquery.sinaEmotion.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/highslide.js"></script>
<script type="text/javascript">
    //封面图效果
    hs.graphicsDir = "__PUBLIC__/images/graphics/";
    hs.showCredits = false;
    hs.outlineType = 'rounded-white';
    hs.restoreTitle = '关闭';
    //hs.marginLeft='300';//很诡异啊
</script>
        

<!---获取链接的input,建议采用html的data自定义---->
<div id="container_index"  data-loadurl={$url_loadwater}>


<input type="hidden" value="0" id="iswater" />
<input type="hidden" value="{$url_postcomment}" id="com_url"/>
<input type="hidden" value="{$url_postfeed}" id="post_url" />
<input type="hidden" value="{$url_mayknow}" id="mayknow_url" />

		<!-- 心情开始 -->
        <div class="mem_left_all" id="mem_left_all">
        	<!-- ad start-->
   			<div class="ad" >
   			<!-- expire是日期，比较高级-->
   			<a href="javascript:void(0);" class="close">x</a>
   			<a href="javascript:;"><img src="__PUBLICAPP__/images/ad_main.jpg" /></a>
   			</div>
            
 <div class="mem_left pubfeed" id="index_publish">
     <div class="mem_post_feed">
         <h3>
             <strong>分享动态</strong>
             <span  id="remain_num">你还可以输入<strong>140</strong>字</span>
         </h3>
    <textarea class="textarea emotion_0" cols="58" rows="4" id='post_feed'  onkeydown='keyMsg(event)' data-content="向朋友分享你的新动态"></textarea>
    <div class="mem_post_feed_icon">
        <span>
            <span class="mem_feed_face"><a href="javascript:;" id="face_0" ></a>
            </span>
            <span class="mem_feed_pic">
            <a href="javascript:void(0);" id="pic_show_link" onclick="showPic('{$url_showpic}')" ></a>
            </span>
            <span class="showerror"  style="display:none;"></span>
        </span>
        <a class="mem_feed_submit"  href="javascript:void(0)" onclick="postFeed()">发表</a>
    </div>
    
    <span id="post_msg_wait" style="display:none;"></span>
     </div>
</div>
<script type="text/javascript">
		// 绑定表情
		$('#face_0').SinaEmotion($('.emotion_0'),'0');
</script>
<div class="mem_left" >
    <div class="mem_feed_con_head" id="show_new_feed">
        <em class="icons"></em><h3>新鲜事</h3>
        <div class="mem_feed_box">
                            <p class="result" data-type=1 data-name="全部">全部</p> <em class="pointer"></em>
                            <ul class="mem_feed_tabs">
                               
                                <li>
                                    <a data-type=2  data-name="联系人"  href="javascript:;">联系人</a>
                                </li>
                               <!--  <li>
                                    <a data-filter="corpIndex" href="javascript:;">公司</a>
                                </li> -->
                                <li>
                                    <a data-type=3  data-name="我的新鲜事" href="javascript:;">我的新鲜事</a>
                                </li>
                            </ul>
                        </div>
    </div>
    
    
<!-- 瀑布流加载 -->
<div class="feed-more" id="mem_show_water" style="display:none;">
</div>
<div class="feed-more" id="show_feed_loading" style="display: none;">
	<img src="__PUBLIC__/images/loading_black.gif">
</div>
<script>loadwater();</script>


</div>
    </div>
		<!-- 心情结束 -->
		
		<!-- 右侧开始 -->
		<div class="mem_right_all">
			<!-- ad start-->
			<div class="right_ad"><img src="__PUBLICAPP__/images/ad_right.jpg" /></div>
			<!-- ad_right end -->
			<!-- home start -->
		<div class="home_user">
    <div class="poster_panel">
      <dl class="poster_mian">
        <span class="poster">
          <a href="/p/61506812" hide_card="true" title=""><img alt="" src="{$my['avatar']}"></a>
        </span>         
        <span class="user_mian p65 png_ie6"></span>
      </dl>
      <span class="name"><a href="/p/61506812" class="a_name" hide_card="true" title="{$my['school']}">{$my['uname']}</a></span>
      <span class="title" title="{$my['school']}">{$my['school']}</span>
      <span class="title">个人资料完整度</span>
      <span class="schedule_panel">67%</span>
      <a href="" title="继续完善" class="impove_btn">继续完善</a>
      <ul class="icon_panel" id="medal">
    <li class="pt01 png_ie6">
      <span class="jian png_ie6" style="display: none;"></span>
      <div class="show_panel" style="display: none;">
        <span class="icon pt01 png_ie6"></span>
        <a href="/medals" class="title j_ga_click_tracking" data-ga-action="GotoMedalFromHome" data-ga-area="Medal" data-ga-category="Medal" title="天际身份证">天际身份证</a>
        <span class="cont_promit"><p>与2000万职场精英PK过招，和大神、学霸、达人一道智造职场范儿，拓展职业生涯！</p></span>
        <div class="p_promit">
          <p class="mt25">成为天际注册用户</p>
          <span class="yi_authen png_ie6"></span>
        </div>      
      </div>
    </li>
    <li class="pt02 png_ie6">
      <span class="jian png_ie6" style="display: none;"></span>
      <div class="show_panel" style="display: none;">
        <span class="icon pt02 png_ie6"></span>
        <a href="/medals" class="title j_ga_click_tracking" data-ga-action="GotoMedalFromHome" data-ga-area="Medal" data-ga-category="Medal" title="真相只有一个">真相只有一个</a>
        <span class="cont_promit">寻找职业新机会？拓展人脉？马上上传真实头像，拓展人脉，有面子！</span>
        <div class="p_promit">
          <p class="mt25">上传你的真实头像</p>
          <span class="yi_authen png_ie6"></span>
        </div>      
      </div>
    </li>
    <li class="pt04 png_ie6">
      <span class="jian png_ie6" style="display: none;"></span>
      <div class="show_panel" style="display: none;">
        <span class="icon pt04 png_ie6"></span>
        <a href="/medals" class="title j_ga_click_tracking" data-ga-action="GotoMedalFromHome" data-ga-area="Medal" data-ga-category="Medal" title="大V驾到">大V驾到</a>
        <span class="cont_promit">管理自己的人脉太费劲？马上绑定微博账号，一键导入人脉圈，事半功倍，倍儿爽！</span>
        <div class="p_promit">
          <p class="mt25">绑定新浪微博账号</p>
          <span class="yi_authen png_ie6"></span>
        </div>      
      </div>
    </li>
    <li class="pt08 png_ie6">
      <span class="jian png_ie6" style="display: none;"></span>
      <div class="show_panel" style="display: none;">
        <span class="icon pt08 png_ie6"></span>
        <a href="/medals" class="title j_ga_click_tracking" data-ga-action="GotoMedalFromHome" data-ga-area="Medal" data-ga-category="Medal" title="我就是焦点">我就是焦点</a>
        <span class="cont_promit">玩职业社交，没有朋友怎么行？马上和你的TA建立联系吧！</span>
        <div class="p_promit">
          <p class="mt25">拥有超过3位一度好友</p>
          <span class="yi_authen png_ie6"></span>
        </div>      
      </div>
    </li>
    <li class="pt00 png_ie6">
      <div class="clear"></div>
      <a href="/medals" class="j_ga_click_tracking" title="5个徽章等你来解锁" data-ga-category="Medal" data-ga-action="GotoMedalFromHome" data-ga-area="Medal"><span class="promit png_ie6">5</span></a>      
      <div class="clear"></div>
      <a href="/medals" class="more j_ga_click_tracking" data-ga-action="GotoMedalFromHome" data-ga-area="Medal" data-ga-category="Medal" title="5个徽章等你来解锁"></a>
    </li>
</ul>

      
      <span class="jian"></span>
    </div>
    
  </div>
		<!-- home end -->
		
		<div class="sign-in" id="checkdiv">
	<span class="datetime"><em class="date">05.07</em>
	<em class="week">周三</em></span>
	<em class="day">DAYS</em>
	<em class="num" id="con_num_day">0</em>
<em href="javascript:void(0)" id="checkin" onclick="checkin()" class="btn-sign">签到</em>
   <div class="sign-wrap" style="display:none" id="checkdetail">
      <i class="arrow-y"></i>
      <div class="sign-box">
	    <h3 id="checkinfo">未签到</h3>
	    <div class="sign-info"><p>已连续签到<font id="con_num">0</font>天，累计签到<font id="total_num">8</font>天</p></div>
		      </div>
		   </div>
		</div>

	<div class="right_panel mt20" id="pymk_right_position">
		<h4>
		<span class="new_title">可能感兴趣的人</span>
		<a href="javascript:void(0);" id="j_pymk_right_change" class="chekcout_ones png_ie6" title="换一换" onclick="memMayKnow()" data-url={url("index/mayknow")}></a>
		</h4>    
		<div class="content" id="pymk_div">

		</div>
		<div class="clear"></div>
	</div>

	<div class="right_panel mt20">
    <h4>
      <span class="new_title">可能感兴趣的任务</span>
      <a href="/mba" class="more_btn" title="更多">更多</a>
    </h4>
    <div class="content">
      <ul class="interestkclist">
          <li>
              <a href="http://www.tianji.com/events/278405" target="_blank" title="【UBI工商管理公开课】—领导力的发展">【UBI工商管理公开课】—领导力的发展</a>
          </li>
          <li>
              <a href="http://www.tianji.com/events/278405" target="_blank" title="【UBI工商管理公开课】—领导力的发展">【UBI工商管理公开课】—领导力的发展</a>
          </li>
          <li>
              <a href="http://www.tianji.com/events/278405" target="_blank" title="【UBI工商管理公开课】—领导力的发展">【UBI工商管理公开课】—领导力的发展</a>
          </li>
          
      </ul>
    </div>
  </div>
	
<div class="right_panel mt20">
    <h4>
      <span class="new_title">可能感兴趣的公司</span>
      <a href="http://job.tianji.com/sr/home/positionYouMayLike" class="more_btn" title="更多">更多</a>
    </h4>
    <div class="content"><ul class="interestjoblist" id="jymi_div">    
     {loop $rec_follow $key $vo}  
    <li>
        <span class="logo">          
            <a href="{url('index/show',array('id'=>$vo['id']))}" hide_card="true" title="{$vo['name']}"><img alt="" src="{$path}{$vo['logo']}"></a>
        </span>
        <span class="title">
          <a href="http://job.tianji.com/career/position/45331" target="_blank" class="ellipsis" title="{$vo['name']}">{$vo['name']}</a>
        </span>
        <span class="title">重庆&nbsp;|&nbsp;{$vo['name']}&nbsp;&nbsp;</span>
      </li>
       {/loop}    

</ul></div>
  </div>
	</div>
	
		<!-- right end -->
<div class="clear"></div>
<!---显示图片框的div-->
<div class="mem_pic_frame" id="show_pic_frame" style="">
    <div class="mem_feed_jiantou_a" style="margin-top:-8px; left: 7px;">
       <span class="mem_jia_back">◆</span><span  class="mem_jia_border" style="color: #e7e7e7;">◆</span>
   </div>
    <div class="show_repost_head" style="width:250px;" >
        上传图片
    <a href="javascript:void(0);" class="close_repost" onclick="closePic()">×</a>
    </div>
    <div class="mem_pic_con" id="show_pic_con">
    </div>
</div>
</div>


   <script>
   //转发心情
   $(document).on('click', '.repost_feed',function(){
   	var id=$(this).data('id');
   	var url=$(this).data('url');
   	url+="&id="+id;
       var i=$.layer({
           type: 2,
           title: '转发心情',
           shadeClose: false, //开启点击遮罩关闭层
           area : ['560px' , '360px'],
           offset : ['260px', '50%'],
           iframe: {src: url}
       });
   });
</script>
{include file="footer"}