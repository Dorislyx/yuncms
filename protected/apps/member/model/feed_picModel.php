<?php

/* 
 * 心情图片主表模板cms_feed_pic
 * by jever
 * 2014.4.13
 */

class feed_picModel extends baseModel{
    protected $table = 'feed_pic';
    
    public function feedPic($fid){
        $result=model('feed_pic')->find('fid = '.$fid);
        return $result;
    }
}
