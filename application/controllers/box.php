<?php
class Box extends MY_Controller{
	public function __construct() {
        parent::__construct();
        $this->template="template/demo";
        $this->load->library('gristech');
        // $this->load->library('boxcalc');
    }
    function index(){
		$this->data['message']="This is a message passed into the template";
		$data['mymessage']="This message is passed directly to the view.";
		// $this->load->view('box/index',$data);


        $this->load->view('box/index',$data);
    	return "Hello from Box Controller";
    }
}