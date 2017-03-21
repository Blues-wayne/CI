<?php
// ///////////////////////////////////////////////////
// Copyright(c) 2017,上下学
// 日 期：2017年3月1日
// 作　者：卢少锦
// E-mail :lushaojin@dakarfleet.com
// 文件名 :MY_Controller.php
// 创建时间:下午4:17:25
// 编 码：UTF-8
// 摘 要:
// ///////////////////////////////////////////////////

class MY_Controller extends CI_Controller {
    
    /**
     * 构造函数
     */
	public function __construct() {
		parent::__construct ();
		$this->load->library('session');
		$this->load->library('redis');
        $this->load->helper('cookie');
		$this->load->database();
	}

}
