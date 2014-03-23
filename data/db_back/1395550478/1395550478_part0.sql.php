<?php exit;?>DROP TABLE IF EXISTS cms_admin
CREATE TABLE `cms_admin` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `groupid` tinyint(4) NOT NULL DEFAULT '1',  `username` char(10) NOT NULL,  `password` char(32) NOT NULL,  `realname` char(10) NOT NULL,  `lastlogin_time` int(10) unsigned NOT NULL,  `lastlogin_ip` char(15) NOT NULL,  `iflock` tinyint(1) unsigned NOT NULL DEFAULT '0',  PRIMARY KEY (`id`),  UNIQUE KEY `usename` (`username`),  KEY `groupid` (`groupid`)) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='管理员信息表';
INSERT INTO cms_admin VALUES('1','1','admin','168a73655bfecefdb15b14984dd2ad60','王洋','1395543037','unknown','0')
INSERT INTO cms_admin VALUES('8','3','test','168a73655bfecefdb15b14984dd2ad60','测试','0','','0')
DROP TABLE IF EXISTS cms_company
CREATE TABLE `cms_company` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `email` varchar(50) NOT NULL COMMENT '公司邮箱',  `password` varchar(50) NOT NULL,  `name` varchar(100) NOT NULL COMMENT '公司名称',  `quality` varchar(100) NOT NULL COMMENT '公司性质',  `scale` varchar(100) NOT NULL COMMENT '公司规模',  `sort` varchar(100) NOT NULL COMMENT '所属行业',  `address` varchar(100) NOT NULL COMMENT '地址',  `websites` varchar(100) NOT NULL COMMENT '网址',  `introduce` text NOT NULL COMMENT '简介',  `ctime` int(11) NOT NULL COMMENT '注册时间',  `regip` varchar(16) NOT NULL COMMENT 'IP',  `lasttime` int(11) NOT NULL COMMENT '最后登陆时间',  `lastip` varchar(16) NOT NULL COMMENT '最后登陆IP',  `license` varchar(100) NOT NULL COMMENT '公司营业执照',  `is_active` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否激活',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO cms_company VALUES('1','yunstudio2012@qq.com','d707c24bd27660ca7d65870027fb9218','云作坊','国企','100人',',000000,100039,100040,100051','长沙理工大学','http://ww.yunstudio.net/','云作坊，很牛B。','0','','1372135503','','','0')
DROP TABLE IF EXISTS cms_fragment
CREATE TABLE `cms_fragment` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `title` varchar(255) NOT NULL,  `sign` varchar(255) NOT NULL COMMENT '前台调用标记',  `content` text NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO cms_fragment VALUES('1','右侧公告信息','announce','<p>\r\n	本站为Yuncms的默认演示模板，Yuncms是一款基于PHP+MYSQL构建的高效网站管理系统。 后台地址请在网址后面加上/index.php?yun=admin进入。 后台的用户名:admin;密码:123456，请进入后修改默认密码。\r\n</p>\r\n<p>\r\n	<img src=\"/yuncms/upload/fragment/image/20140224/20140224192956_37828.jpg\" width=\"100\" height=\"120\" alt=\"\" /> \r\n</p>')
INSERT INTO cms_fragment VALUES('5','test','test','test')
DROP TABLE IF EXISTS cms_group
CREATE TABLE `cms_group` (  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(255) NOT NULL,  `power` varchar(1000) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO cms_group VALUES('1','超级管理员','-1')
INSERT INTO cms_group VALUES('2','普通管理员','277,283,1,2,4,5,6,7,8,9,228,10,11,12,13,14,15,16,157,158,174,268,288')
INSERT INTO cms_group VALUES('3','test','277,283,1,2,4,5,6,7,8,9,228')
DROP TABLE IF EXISTS cms_link
CREATE TABLE `cms_link` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `type` tinyint(1) NOT NULL COMMENT '类型',  `norder` int(5) NOT NULL COMMENT '排序',  `name` varchar(30) NOT NULL COMMENT '站点名',  `url` varchar(40) NOT NULL COMMENT '站点地址',  `picture` varchar(80) NOT NULL COMMENT '本地logo',  `logourl` varchar(50) NOT NULL COMMENT '远程logo',  `siteowner` varchar(30) NOT NULL COMMENT '站点所有者',  `info` varchar(300) NOT NULL COMMENT '介绍',  `ispass` tinyint(1) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
INSERT INTO cms_link VALUES('2','2','0','云作坊','http://www.yunstudio.net','20140319/20140319011136_36106.jpg','','云作坊','','1')
INSERT INTO cms_link VALUES('6','1','0','科技交流平台','http://www.kjjlpt.com','20140319/20140319010853_28083.png','','','','1')
INSERT INTO cms_link VALUES('8','2','0','yuncms','http://cms.yunstudio.net','20140319/20140319012016_73229.png','','王洋','','1')
DROP TABLE IF EXISTS cms_member
CREATE TABLE `cms_member` (  `id` int(20) NOT NULL AUTO_INCREMENT,  `login` varchar(30) NOT NULL COMMENT '登陆邮箱',  `password` varchar(60) NOT NULL,  `sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1男2女',  `location` varchar(80) NOT NULL DEFAULT '0' COMMENT '籍贯',  `school` varchar(50) NOT NULL,  `major` int(50) NOT NULL COMMENT '专业',  `uname` varchar(30) NOT NULL COMMENT '用户名',  `tel` varchar(15) NOT NULL,  `qq` varchar(20) NOT NULL,  `tag` varchar(200) NOT NULL COMMENT '个人标签',  `ctime` int(11) NOT NULL,  `regip` varchar(16) NOT NULL,  `lasttime` int(11) NOT NULL,  `lastip` varchar(16) NOT NULL,  `is_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活',  `is_init` tinyint(1) NOT NULL COMMENT '是否初始化用户资料',  `last_feed_id` int(11) NOT NULL COMMENT '最后发表心情id',  `last_feed_time` int(11) NOT NULL COMMENT '最后发表心情时间',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO cms_member VALUES('1','862820606@qq.com','d707c24bd27660ca7d65870027fb9218','1','3774','会员演示','0','admin','13638816362','404133749','','1372135503','','1394343731','unknown','1','0','0','0')
INSERT INTO cms_member VALUES('2','862820606@qq.com','663d82c90c57ffa5005b4a1a0911b391','2','0','','0','yunstudio','','','','1372135503','unknown','1372135503','unknown','1','0','0','0')
INSERT INTO cms_member VALUES('3','yunstudio2012@qq.com','6857d1c563b6217fb797453f467a1dbc','1','0','','0','nimei','','','','1373010733','unknown','1373619128','unknown','1','0','0','0')
DROP TABLE IF EXISTS cms_member_group
CREATE TABLE `cms_member_group` (  `id` int(3) NOT NULL AUTO_INCREMENT,  `group_name` varchar(30) NOT NULL,  `notallow` text NOT NULL,  `user_group_icon` varchar(120) NOT NULL COMMENT ' 用户组图标名称',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO cms_member_group VALUES('2','普通会员','yun','05.gif')
INSERT INTO cms_member_group VALUES('4','超级会员','','03.gif')
INSERT INTO cms_member_group VALUES('7','新手上路','','02.gif')
INSERT INTO cms_member_group VALUES('8','高级会员','','07.gif')
INSERT INTO cms_member_group VALUES('10','测试分组','','0')
DROP TABLE IF EXISTS cms_member_group_link
CREATE TABLE `cms_member_group_link` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `uid` int(11) NOT NULL COMMENT '会员id',  `user_group_id` int(11) NOT NULL COMMENT '会员组id',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO cms_member_group_link VALUES('1','1','4')
INSERT INTO cms_member_group_link VALUES('2','2','7')
INSERT INTO cms_member_group_link VALUES('3','3','7')
DROP TABLE IF EXISTS cms_member_login
CREATE TABLE `cms_member_login` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `mid` int(11) NOT NULL COMMENT '会员id',  `weibo_key` varchar(100) NOT NULL COMMENT '微博key',  `token` varchar(50) NOT NULL COMMENT '账号激活码',  `token_exptime` int(10) NOT NULL COMMENT '激活码有效期',  `type` varchar(30) NOT NULL COMMENT '登陆方式',  PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS cms_method
CREATE TABLE `cms_method` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `rootid` int(10) unsigned NOT NULL,  `pid` float unsigned NOT NULL,  `operate` varchar(255) NOT NULL,  `name` varchar(255) NOT NULL,  `ifmenu` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否菜单显示',  PRIMARY KEY (`id`),  KEY `pid` (`pid`)) ENGINE=MyISAM AUTO_INCREMENT=336 DEFAULT CHARSET=utf8;
INSERT INTO cms_method VALUES('1','1','0','admin','后台登陆管理','1')
INSERT INTO cms_method VALUES('2','1','1','index','管理员管理','1')
INSERT INTO cms_method VALUES('4','1','1','admindel','管理员删除','0')
INSERT INTO cms_method VALUES('5','1','1','adminedit','管理员编辑','0')
INSERT INTO cms_method VALUES('6','1','1','adminlock','管理员锁定','0')
INSERT INTO cms_method VALUES('7','1','1','group','权限管理','1')
INSERT INTO cms_method VALUES('8','1','1','groupedit','管理组编辑','0')
INSERT INTO cms_method VALUES('9','1','1','groupdel','管理组删除','0')
INSERT INTO cms_method VALUES('10','10','0','news','资讯管理','1')
INSERT INTO cms_method VALUES('11','10','10','index','已有资讯','1')
INSERT INTO cms_method VALUES('12','10','10','add','添加资讯','1')
INSERT INTO cms_method VALUES('13','10','10','edit','资讯编辑','0')
INSERT INTO cms_method VALUES('14','10','10','del','资讯删除','0')
INSERT INTO cms_method VALUES('15','10','10','lock','资讯锁定','0')
INSERT INTO cms_method VALUES('16','10','10','recmd','资讯推荐','0')
INSERT INTO cms_method VALUES('17','17','0','dbback','数据库管理','1')
INSERT INTO cms_method VALUES('18','17','17','index','数据库备份','1')
INSERT INTO cms_method VALUES('19','17','17','recover','备份恢复','0')
INSERT INTO cms_method VALUES('20','17','17','detail','备份详细','0')
INSERT INTO cms_method VALUES('21','17','17','del','备份删除','0')
INSERT INTO cms_method VALUES('22','22','0','index','后台面板','0')
INSERT INTO cms_method VALUES('23','22','22','index','后台首页','0')
INSERT INTO cms_method VALUES('24','22','22','login','登陆','0')
INSERT INTO cms_method VALUES('25','22','22','logout','退出登陆','0')
INSERT INTO cms_method VALUES('26','22','22','verify','验证码','0')
INSERT INTO cms_method VALUES('27','22','22','welcome','服务器环境','0')
INSERT INTO cms_method VALUES('28','28','0','set','全局设置','1')
INSERT INTO cms_method VALUES('29','28','28','index','网站设置','1')
INSERT INTO cms_method VALUES('30','30','0','sort','分类管理','1')
INSERT INTO cms_method VALUES('31','30','30','index','栏目列表','1')
INSERT INTO cms_method VALUES('33','30','30','del','分类删除','0')
INSERT INTO cms_method VALUES('277','0','0','appmanage','应用管理','1')
INSERT INTO cms_method VALUES('85','28','28','menuname','后台功能','1')
INSERT INTO cms_method VALUES('159','150','150','images_upload','图片批量上传','0')
INSERT INTO cms_method VALUES('158','10','10','FileManagerJson','编辑器上传管理','0')
INSERT INTO cms_method VALUES('157','10','10','UploadJson','编辑器上传','0')
INSERT INTO cms_method VALUES('174','10','10','cutcover','封面图剪切','0')
INSERT INTO cms_method VALUES('236','30','30','PageUploadJson','单页上传','0')
INSERT INTO cms_method VALUES('235','30','30','pageedit','单页编辑','0')
INSERT INTO cms_method VALUES('234','30','30','pageadd','添加单页栏目','0')
INSERT INTO cms_method VALUES('231','30','30','newsedit','文章栏目编辑','0')
INSERT INTO cms_method VALUES('230','30','30','newsadd','添加文章栏目','0')
INSERT INTO cms_method VALUES('182','28','28','clear','网站缓存','1')
INSERT INTO cms_method VALUES('188','188','0','link','友情链接','1')
INSERT INTO cms_method VALUES('189','188','188','index','链接列表','1')
INSERT INTO cms_method VALUES('190','188','188','add','添加链接','1')
INSERT INTO cms_method VALUES('191','188','188','edit','链接编辑','0')
INSERT INTO cms_method VALUES('192','188','188','del','链接删除','0')
INSERT INTO cms_method VALUES('328','1','1','adminnow','账户管理','1')
INSERT INTO cms_method VALUES('229','188','188','lock','锁定','0')
INSERT INTO cms_method VALUES('237','30','30','PageFileManagerJson','单页上传管理','0')
INSERT INTO cms_method VALUES('238','238','0','fragment','碎片管理','1')
INSERT INTO cms_method VALUES('239','238','238','index','碎片列表','1')
INSERT INTO cms_method VALUES('240','238','238','add','碎片添加','1')
INSERT INTO cms_method VALUES('241','238','238','edit','碎片编辑','0')
INSERT INTO cms_method VALUES('242','238','238','del','碎片删除','0')
INSERT INTO cms_method VALUES('243','238','238','UploadJson','编辑器上传','0')
INSERT INTO cms_method VALUES('244','238','238','FileManagerJson','编辑器上传管理','0')
INSERT INTO cms_method VALUES('245','28','28','tpchange','前台模板','1')
INSERT INTO cms_method VALUES('251','30','30','pluginadd','添加应用栏目','0')
INSERT INTO cms_method VALUES('252','30','30','pluginedit','应用栏目编辑','0')
INSERT INTO cms_method VALUES('267','258','258','file','文件上传','0')
INSERT INTO cms_method VALUES('288','10','10','colchange','资讯转移栏目','0')
INSERT INTO cms_method VALUES('283','283','0','member','会员管理','1')
INSERT INTO cms_method VALUES('292','28','28','tplist','模板文件列表','0')
INSERT INTO cms_method VALUES('293','28','28','tpadd','模板文件添加','0')
INSERT INTO cms_method VALUES('294','28','28','tpedit','模板文件编辑','0')
INSERT INTO cms_method VALUES('295','28','28','tpdel','删除模板文件','0')
INSERT INTO cms_method VALUES('296','28','28','tpgetcode','获取模板内容','0')
INSERT INTO cms_method VALUES('301','30','30','add','添加栏目','1')
INSERT INTO cms_method VALUES('304','3','3','placelist','内容定位列表','1')
INSERT INTO cms_method VALUES('305','3','3','placeadd','添加内容定位','1')
INSERT INTO cms_method VALUES('306','3','3','placeedit','定位编辑','0')
INSERT INTO cms_method VALUES('307','3','3','placedel','定位删除','0')
INSERT INTO cms_method VALUES('331','283','283','member/adminmember','会员管理','0')
INSERT INTO cms_method VALUES('228','1','1','adminadd','添加管理员','1')
INSERT INTO cms_method VALUES('3','3','0','place','定位管理','1')
INSERT INTO cms_method VALUES('330','283','283','admingroup/index','会员组管理','0')
INSERT INTO cms_method VALUES('314','314','0','files','附件管理','1')
INSERT INTO cms_method VALUES('315','314','314','index','文件列表','1')
INSERT INTO cms_method VALUES('316','314','314','del','删除文件','0')
INSERT INTO cms_method VALUES('324','28','28','email','邮件设置','1')
INSERT INTO cms_method VALUES('325','28','28','dobadword','关键词过滤','0')
INSERT INTO cms_method VALUES('332','283','283','adminmember/active','待激活用户','0')
INSERT INTO cms_method VALUES('333','283','283','adminmember/sendAll','群发邮件','0')
INSERT INTO cms_method VALUES('334','283','283','adminmember/send_allmsg','群发私信','0')
INSERT INTO cms_method VALUES('335','0','0','company','企业管理','1')
DROP TABLE IF EXISTS cms_news
CREATE TABLE `cms_news` (  `id` int(20) NOT NULL AUTO_INCREMENT,  `sort` varchar(350) NOT NULL COMMENT '类别',  `account` char(15) NOT NULL COMMENT '发布者账户',  `title` varchar(60) NOT NULL COMMENT '标题',  `places` varchar(100) NOT NULL,  `color` varchar(7) NOT NULL COMMENT '标题颜色',  `picture` varchar(80) NOT NULL,  `keywords` varchar(300) NOT NULL COMMENT '关键字',  `description` varchar(600) NOT NULL,  `content` text NOT NULL COMMENT '内容',  `method` varchar(100) NOT NULL COMMENT '方法',  `tpcontent` varchar(100) NOT NULL COMMENT '模板',  `norder` int(4) NOT NULL COMMENT '排序',  `recmd` tinyint(1) NOT NULL COMMENT '推荐',  `hits` int(10) NOT NULL COMMENT '点击量',  `ispass` tinyint(1) NOT NULL,  `origin` varchar(30) NOT NULL COMMENT '来源',  `addtime` int(11) NOT NULL,  PRIMARY KEY (`id`),  FULLTEXT KEY `sort` (`sort`)) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
INSERT INTO cms_news VALUES('23',',000000,100028,100036','admin','激情','100','#E53333','20140309/thumb_20140309144706_30440.jpg','哈哈','哈哈','哈','news/content','news_content','0','0','30','1','原创','1394346935')
INSERT INTO cms_news VALUES('24',',000000,100028,100036','admin','果敢','100','#00D5FF','20140309/thumb_thumb_thumb_20140309144918_26526.jpg','果敢','果敢','果敢<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/31.gif\" border=\"0\" alt=\"\" />','news/content','news_content','0','0','30','1','果敢','1394347730')
INSERT INTO cms_news VALUES('25',',000000,100028,100036','admin','执着','100','','20140309/thumb_thumb_20140309183130_90592.jpg','执着','执着','执着','news/content','news_content','0','0','34','1','原创','1394361075')
INSERT INTO cms_news VALUES('26',',000000,100028,100036','admin','超越','100','#B8D100','20140309/thumb_thumb_thumb_thumb_20140309183155_88695.jpg','超越','超越','超越梦想<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/0.gif\" border=\"0\" alt=\"\" />','news/content','news_content','0','0','31','1','原创','1394361101')
DROP TABLE IF EXISTS cms_notify_email
CREATE TABLE `cms_notify_email` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `uid` int(10) NOT NULL,  `email` varchar(250) NOT NULL,  `title` varchar(250) NOT NULL,  `body` text NOT NULL,  `ctime` int(11) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
INSERT INTO cms_notify_email VALUES('1','3','yunstudio2012@qq.com','why','怎么啦<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/5.gif\" border=\"0\" alt=\"\" />','1395242900')
INSERT INTO cms_notify_email VALUES('2','2','862820606@qq.com','群发测试','群发测试','1395305979')
INSERT INTO cms_notify_email VALUES('3','3','yunstudio2012@qq.com','群发测试','群发测试','1395305979')
INSERT INTO cms_notify_email VALUES('4','1','862820606@qq.com','所有人','所有人','1395308667')
INSERT INTO cms_notify_email VALUES('5','2','862820606@qq.com','所有人','所有人','1395308667')
INSERT INTO cms_notify_email VALUES('6','3','yunstudio2012@qq.com','所有人','所有人','1395308667')
DROP TABLE IF EXISTS cms_notify_message
CREATE TABLE `cms_notify_message` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `type` varchar(20) NOT NULL COMMENT '通知类型',  `uid` int(11) NOT NULL COMMENT '接收者id',  `title` varchar(250) NOT NULL,  `body` text NOT NULL,  `ctime` int(11) NOT NULL,  `is_read` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否已读',  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO cms_notify_message VALUES('9','system','2','大家好','大家好<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/13.gif\" border=\"0\" alt=\"\" />','1395368348','0')
INSERT INTO cms_notify_message VALUES('8','system','1','大家好','大家好<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/13.gif\" border=\"0\" alt=\"\" />','1395368348','0')
INSERT INTO cms_notify_message VALUES('7','system','1','欢迎你','欢迎你注册','1395368304','0')
INSERT INTO cms_notify_message VALUES('10','system','3','大家好','大家好<img src=\"http://localhost/Yuncms/public/kindeditor/plugins/emoticons/images/13.gif\" border=\"0\" alt=\"\" />','1395368348','0')
DROP TABLE IF EXISTS cms_page
CREATE TABLE `cms_page` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `sort` varchar(350) NOT NULL,  `content` text NOT NULL,  `edittime` varchar(20) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO cms_page VALUES('3',',000000,100028,100033','关于我们','2014-02-27 14:28:57')
DROP TABLE IF EXISTS cms_place
CREATE TABLE `cms_place` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(60) NOT NULL,  `norder` int(5) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
INSERT INTO cms_place VALUES('100','首页banner','0')
INSERT INTO cms_place VALUES('101','首页幻灯','0')
DROP TABLE IF EXISTS cms_sort
CREATE TABLE `cms_sort` (  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,  `type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '模型类别',  `path` varchar(255) DEFAULT NULL,  `name` varchar(255) DEFAULT NULL,  `deep` int(5) unsigned NOT NULL DEFAULT '1' COMMENT '深度',  `norder` tinyint(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',  `ifmenu` tinyint(1) NOT NULL COMMENT '是否前台显示',  `method` varchar(100) NOT NULL COMMENT '模型方法',  `tplist` varchar(100) NOT NULL COMMENT '列表模板',  `keywords` varchar(255) NOT NULL COMMENT '描述',  `description` varchar(300) NOT NULL COMMENT '描述',  `url` varchar(100) NOT NULL COMMENT '外部链接',  PRIMARY KEY (`id`),  FULLTEXT KEY `path` (`path`)) ENGINE=MyISAM AUTO_INCREMENT=100054 DEFAULT CHARSET=utf8;
INSERT INTO cms_sort VALUES('100028','1',',000000','新闻资讯','1','0','1','news/index','news_index,news_content','资讯信息','资讯信息','10')
INSERT INTO cms_sort VALUES('100029','1',',000000,100028','最新动态','2','0','1','news/index','news_index,news_content','最新动态','最新动态','10')
INSERT INTO cms_sort VALUES('100033','3',',000000,100028','关于我们','2','0','1','page/index','page_index','关于我们','关于我们','')
INSERT INTO cms_sort VALUES('100034','1',',000000,100028','最近公告','2','0','1','news/index','news_index,news_content','最近公告','最近公告','10')
INSERT INTO cms_sort VALUES('100036','1',',000000,100028','作坊文化','2','0','0','news/index','news_index,news_content','作坊文化','作坊文化','10')
INSERT INTO cms_sort VALUES('100037','5',',000000','个人标签','1','0','0','','','','','')
INSERT INTO cms_sort VALUES('100038','5',',000000,100037','周润发','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100039','5',',000000','行业管理','1','0','0','','','','','')
INSERT INTO cms_sort VALUES('100040','5',',000000,100039','IT行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100041','5',',000000,100039','金融行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100042','5',',000000,100039','专业服务','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100043','5',',000000,100039','教育培训行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100044','5',',000000,100039','消费品行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100045','5',',000000,100039','文化传媒行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100046','5',',000000,100039','建筑/房地产行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100047','5',',000000,100039','贸易物流行业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100048','5',',000000,100039','制造工业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100049','5',',000000,100039','医疗/卫生','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100050','5',',000000,100039','服务业','2','0','0','','','','','')
INSERT INTO cms_sort VALUES('100051','5',',000000,100039,100040','计算机软件','3','0','0','','','','','')
INSERT INTO cms_sort VALUES('100052','5',',000000,100039,100040','计算机硬件','3','0','0','','','','','')
INSERT INTO cms_sort VALUES('100053','5',',000000,100039,100040','互联网','3','0','0','','','','','')
