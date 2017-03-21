<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//////自定义部分的配置开始
define("ADMIN_STATIC_HOST","http://m.shangxiaxue.cn");
define("ADMIN_HOST","http://m.shangxiaxue.cn");
define("ADMIN_HOST","http://img.shangxiaxue.cn");
//需要预先保留公共的配置
require(APPPATH.'config/config.php');

//上下学的公众号
$config['appid']="wx55ffd045f55c58ed";//服务号appid
$config['appsecret']="29d5bb10e1a8c7de07ab6ab1eeea3298";//对应的密钥

$config['sess_driver'] = 'redis';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = 'tcp://r-2ze1beeae6b9a7b4.redis.rds.aliyuncs.com:6379?weight=1&timeout=5&auth=2dTUZfCdQBr6v&database=1';