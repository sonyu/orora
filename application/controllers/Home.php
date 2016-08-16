<?php
class  Home extends MY_Controller{
	function index(){
		$this->data['temp'] = 'site/customer/index';		
		$this->load->view('site/layout', $this->data);
	}
}