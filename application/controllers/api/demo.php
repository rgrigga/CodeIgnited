<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Demo extends MY_Controller {
    public function index() {
    	$msg="This doesn't do much yet, but it works!";
        $this->out = array('test' => true,'message'=> $msg);
    }
    public function smallest($data=null){
    	$data=array("one"=>"foo","two"=>"bar");
    	$this->out = array('data'=>$data);
    }
}