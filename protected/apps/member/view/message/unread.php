{include file="header"}
 <link href="__PUBLICAPP__/css/profile_common.css" media="screen" rel="stylesheet" type="text/css" />
 <link href="__PUBLICAPP__/css/message.css" media="screen" rel="stylesheet" type="text/css" />

<div id="dj-content-wrap" class="dj-content-wrap ">
    <div class="dj-content-inner">
            <div class="dj-content-shadow">
<div id="content" class="clearfix">
    <div class="msgcenter-box">
        <h2 class="title">
        <span>
                <a class="green" href="/yuncms/index.php?yun=member/profile/index">返回我的档案</a>
            </span>
          <em></em><i>我的私信</i>
        </h2>

        <div class="msg-main  ">
<div class="fun-menu clearfix">
    <div class="menu-i selected">
        <a id="middleMenuBtn" data-num="1" href="/message/summary/unread" class="">
            未读私信(1)
        </a>
            <i class="pointer"></i>
    </div>
    <div class="menu-i ">
        <a id="letterMenuBtn" href="/message/summary" class="">
            全部私信
        </a>
    </div>

    <div class="menu-i ">
        <a href="/message/editor" class="">写私信</a>
    </div>
</div>            <div class="list-item msg-list">
                    <ul>
                            <li data-id="865838" data-href="/message/terminal?contractUid=23840651" class="unread">
                                <div class="item-layout">
                                    <div class="pic">
                                        <a target="_blank" href="http://www.dajie.com/profile/W3RU4xiV5Pk*?f_fid=24012661">
                                            <img src="http://0.f1.dajieimg.com/group1/M00/2E/85/CgpAmVJhWleAK5jBAAAAoLwQons828s.jpg">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <p class="item-h">
                                            <a href="http://www.dajie.com/profile/W3RU4xiV5Pk*?f_fid=24012661" class="name b" target="_blank">
                                            谭韬
                                            </a>
                                                <span class="tip">(1条新)</span>
                                        </p>

                                        <p class="desc">你好</p>
                                    </div>
                                    <input type="checkbox" class="checkbox">
                                    <span class="time g9" style="display: block;">2013-10-18</span>
                                    <a class="del-btn" data-name="蒲精" data-id="2048859" href="javascript:;" style="display: none;">x</a>
                                </div>
                            </li>
                    </ul>
                    <div class="all-mark">
                        <input type="checkbox" class="checkbox">
                        <span class="del-sel">删除</span>
                        <span class="dot-middle">.</span>
                        <span class="mark-sel">标记为已读</span>
                    </div>
            </div>
        </div>
    </div>
</div>
            </div>
    </div>
</div>
<script>
$(function(){ 
	$('.msg-list ul li').on({ 
	mousemove:function(){ 
		$(".time").css("display","none");
		$(".del-btn").css("display","inline");
	}, 
	mouseleave:function(){ 
		$(".time").css("display","block");
		$(".del-btn").css("display","none");
	} 
	}); 
}) 


</script>

{include file="footer"}