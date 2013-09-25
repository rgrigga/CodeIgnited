<?php

class Demo extends MY_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('gristech');
        $this->load->model('news_model');
        
        $this->template='template/demo';

        $this->data['nav']='demo/partials/nav';
        $this->data['header']='demo/partials/header';
        $this->data['secondary']='demo/partials/secondary';
        $this->data['footer']='demo/partials/footer';
        $this->data['news'] = $this->news_model->get_news();

        //Promoted to MY_Controller:
        // $this->data['message'] = ENVIRONMENT." environment";
    }

    public function index() {
      $data['title']="Demo Index";
        // $this->data['message']="ba-da-bing";
        // $data['message']="ba-da-boom";
        $this->load->view('demo/index',$data);
    }

    public function page($slug="home"){

      $data['slug']=$slug;
      $data['title']="Page: ".$slug;
      $data['message']="ba-da-boom";

      $this->view="demo/pages/".$slug;

      $this->load->view('demo/pages/'.$slug,$data);
    }


}