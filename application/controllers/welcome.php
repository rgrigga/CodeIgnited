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
        
        $this->template='template/megacorp';
        $this->data['nav']='partials/nav/default-nav';

    }

    public function index() {
        $this->load->view('welcome/index');
    }

}