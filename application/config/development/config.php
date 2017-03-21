<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//需要预先保留公共的配置
require(APPPATH.'config/config.php');
//达喀尔公众号测试
$config['appid']="wxc5e50a12da7a24f5";//服务号appid
$config['appsecret']="8249821109214feaf7964f39f1ca1c24";//对应的密钥
//////自定义部分的配置开始
define("ADMIN_STATIC_HOST","http://dev-m.shangxiaxue.com");
define("IMG_HOST","http://img.shangxiaxue.com");
define("ADMIN_HOST","http://dev-m.shangxiaxue.com");