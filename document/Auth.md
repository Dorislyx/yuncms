
###auth是canphp提供的一个权限认证类
实现：`include/lib/Auth.class.php`
该类是根据yuncms的数据库（admin,group）重写了canphp的 anth类
内部实现比较复杂 ，主要是根据admin表里面用户的groupid查询用户所 拥有的权限。

###如何设置用户权限？
>admin  group  method三个表
>admin表通过groupid（管理员权限组）group表power字段是权限组合，组合的权限在method表
>权限分组用数据库的in数组形式


####*系统后台的登陆采用auth的方式 *
>过程：进入页面时候设置在commonController.php里面的__construct
验证时候设置在adminModel.php里面的login方法的groupid
```
Auth::check($config);//登陆和权限检查
```

```
$groupid=$_SESSION[Auth::$config['AUTH_SESSION_PREFIX'].'groupid'];
/*
	1.Auth::$config['AUTH_SESSION_PREFIX']：得到的是auth类里面的session前缀：auth_

*/
```

登陆后的session信息：
```
Array
(
    [verify] => 6364
    [auth_groupid] => 1
    [auth_power] => -1
    [yunapppower] => -1
    [admin_uid] => 1
    [admin_username] => admin
    [admin_realname] => 王洋
)

```

Auth::set($user_info['groupid']);设置认证用户组id

Auth::getGroupPower($user_info['groupid']);获取用户组权限信息

