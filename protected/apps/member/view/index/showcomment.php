<div class="mem_feed_jiantou_a" style="right: 48px;">
       <span class="mem_jia_back">◆</span><span  class="mem_jia_border" style="color: #f9f9f9;">◆</span>
   </div>
 <div class="mem_comlist"  style="border-bottom: none;"  id="show_new_comment_{$id}">
            <textarea id="post_comment_{$id}" class="emotion_{$id} mem_com_textarea"  
                      onpropertychange="this.style.height=this.scrollHeight+'px';" 
                      oninput="this.style.height=this.scrollHeight+'px';"  
                      onkeydown="keyCom(event,'{$id}')" 
                      onfocus="this.style.borderColor='#FF6600'"
                      onblur="this.style.borderColor='#7b7b7b'"></textarea>
    <h3>
    <span class="mem_feed_face"><a href="javascript:void(0);" id="face_{$id}" ></a></span>
    <a class="mem_com_submit" style="color:#ffffff" href="javascript:void(0)" onclick="postComment('{$id}')">评论</a>
  
    </h3>
    <script type="text/javascript">
		// 绑定表情
		$('#face_{$id}').SinaEmotion($('.emotion_{$id}'),'{$id}');
    </script>
        <div id="show_com_error_{$id}"></div>
        </div>
       {if $total!=0}
       {loop $result $_k $_v}
           {if $_v['feed_type']==3}
        
    <div class="mem_comlist">
        <div class="mem_comlist_a" >        
            <img width="40px" src="http://6.f1.dajieimg.com/group1/M00/38/00/CgpAmVKd2guAMAlrAAAAoLwQons885s.jpg" />
        </div>
<div class="mem_comlist_b">
    <a href="#">{$_v['membermid']['uname']}</a>回复<a href="#">{$_v['memberfmid']['uname']}</a>:{$_v['feed_content']}
  ({timeshow($_v['ctime'])})
    <h4 style="text-align: right;"><a href="javascript:void(0)" onclick="showReply({$_v['id']},'{$url_showreply}')">回复</a></h4>
    </div> 
        <div class="mem_feed_jiantou" mem_feed_jiantou id="feed_reply_{$_v['id']}" style=" width: 400px; height: auto; float:right; background: #e6e6e6; display: none ">
            </div>
    </div>
 {else}
<div class="mem_comlist">
        <div class="mem_comlist_a">        
            <a href="#"> <img width="40px" src="http://6.f1.dajieimg.com/group1/M00/38/00/CgpAmVKd2guAMAlrAAAAoLwQons885s.jpg" /></a>
        </div>
                <div class="mem_comlist_b">
    <a href="#">{$_v['membermid']['uname']}</a>:{$_v['feed_content']}
    <h4 style="text-align: right;"><a href="javascript:void(0)" onclick="showReply({$_v['id']},'{$url_showreply}')">回复</a></h4>
    </div>
            
             <div class="mem_feed_jiantou" mem_feed_jiantou id="feed_reply_{$_v['id']}" style=" width: 400px; height: auto; float:right; background: #e6e6e6; display: none ">
            </div>
    </div>
  {/if}
 {/loop}
     
       
       {if $total>10}
       <a href="#">共{$total}条评论，查看剩余的{$remain}条</a>{/if}
        {/if}