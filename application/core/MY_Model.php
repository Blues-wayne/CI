<?php
// ///////////////////////////////////////////////////
// Copyright(c) 2017,上下学--让孩子出行更简单
// 日 期：2017年3月10日
// 作　者：卢少锦
// E-mail :lushaojin@dakarfleet.com
// 文件名 :MY_Model.php
// 创建时间:上午11:40:00
// 编 码：UTF-8
// 摘 要:
// ///////////////////////////////////////////////////

class MY_Model extends CI_Model{
    
    public function __construct(){
		parent::__construct();
		$this->load->library('redis');
		$this->load->database();
	}
}