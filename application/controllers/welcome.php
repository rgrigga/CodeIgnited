<?php

/*
  Document   : welcome
  Created on : Jan 2, 2013, 12:59:50 PM
  Author     : Jason Crider
  Description:

 */

class Welcome extends MY_Controller {

    public function __construct() {

        parent::__construct();
        
        // $this->template='template/default';
        $this->data['nav']='partials/nav/default-nav';

    }

    public function index() {
      $this->data['message']="This is a message passed into the template";
      $data['mymessage']="This message is passed directly to the view.";
      $this->load->view('welcome/index',$data);
    }

}