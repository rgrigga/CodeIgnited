<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Box extends MY_Controller {
    public function index() {
        $this->out = array('test' => true,'box'=> 'hello!');
    }
    public function smallest($data=null){
    	$this->out = array('data'=>$data);
    }
}