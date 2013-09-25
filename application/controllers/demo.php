<?php

class Demo extends MY_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('gristech');
        
        $this->template='template/megacorp';

        $this->data['nav']='demo/partials/nav';
        $this->data['header']='demo/partials/header';
        $this->data['secondary']='demo/partials/secondary';
        $this->data['footer']='demo/partials/footer';
    }

    public function index() {
        $this->data['message']="ba-da-bing";
        $data['message']="ba-da-boom";
        $this->load->view('demo/index',$data);

        // $this->load->view('demo/pages/alpha');

    }

    private function pages($slug="home"){
      
      // $data['slug']=$slug;
      // $data['title']="Demonstration";
      
      $this->view="demo/pages/".$slug;
      // die(var_dump($this->view));
      // var_dump($this->view);
      // die();
    }

    public function page($slug="home"){
      // $this->view="demo/pages/".$slug;
      $data['slug']=$slug;
      $data['title']="Demonstration";
      $data['message']="ba-da-boom";
      $data['content']=$this->pages($slug);

      $this->load->view('demo/pages/'.$slug,$data);
    }


}