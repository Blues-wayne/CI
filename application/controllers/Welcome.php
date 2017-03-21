<?php
// ///////////////////////////////////////////////////
// Copyright(c) 2017,上下学--让孩子出行更简单
// 日 期：2017年3月8日
// 作　者：卢少锦
// E-mail :lushaojin@dakarfleet.com
// 文件名 :Welcome.php
// 创建时间:下午6:09:32
// 编 码：UTF-8
// 摘 要:默认的入口控制器
// ///////////////////////////////////////////////////

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    
    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
	    //$this->load->model("test/test_model");
	    //print_r($this->test_model->get_data());exit;
	    //print_r($this->test_model->get_data2());
	    //加载主页面
		$this->load->view('index');
	}
	
	public function test(){
	    $this->redis->set("dd","this is dd");
	    exit;
	    $this->load->database();
	    print_r($this->db->query("select * from sxx_user")->row_array());
	    $this->load->model("test/test_model");
	    print_r($this->test_model->get_data());exit;
	    //测试记在curl库
	    //$this->load->library('curl');
	    //echo $this->curl->simple_get('http://www.126.com/');
	}
	
	public function test2(){
	    $data=array (
  'appid' => 'wx55ffd045f55c58ed',
  'attach' => 'normalbuy',
  'bank_type' => 'CFT',
  'cash_fee' => '1',
  'fee_type' => 'CNY',
  'is_subscribe' => 'Y',
  'mch_id' => '1419816302',
  'nonce_str' => 'DrHw2lwPAgXSaFt8',
  'openid' => 'ocdwawnIFTcRyi-_fk3JSM5qPQXM',
  'out_trade_no' => '20170320151350676684',
  'result_code' => 'SUCCESS',
  'return_code' => 'SUCCESS',
  'sign' => '1D5A4A9A0CB2421B0B0871945A7EB89B',
  'time_end' => '',
  'total_fee' => '',
  'trade_type' => 'JSAPI',
  'transaction_id' => '4004962001201703204028806219',
);
	    echo $this->db->insert_string("sxx_pay_log",$data);
	    exit;
	    
	    //echo $this->redis->get('dd');
	    $this->load->model("user/user_model");
	    $this->user_model->create_avatar(1,"http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/46");
	    exit;
	    $this->load->library("weixin");
	    var_dump($this->weixin->getJsSignData("http://m.shangxiaxue.cn/welcome/test2"));
	}
}
