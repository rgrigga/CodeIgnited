<?php

class MY_Controller extends CI_Controller {

    public $template;
    // public $nav=$this->load->view('partials/primary-nav');
    
    // public $partials=array(
    //     'nav'=>'partials/primary-nav',
    //     'header'=>'primary-header',
    //     'footer'=>'primary-footer'
    //     );

    public $data = array('message' => false);
    public $isApi = false;
    public $out = array('success' => true);
    public $view = false;
    public $allowedControllers = array('auth');

    public function __construct() {
        parent::__construct();

        $this->data['message'] = ENVIRONMENT." environment";

        //Here we will construct some default partial views
        $this->data['nav']='partials/nav/default-nav';
        $this->data['header']='partials/default-header';
        $this->data['secondary']='partials/default-secondary';
        $this->data['footer']='partials/default-footer';

        $this->load->helper('url');

        if ($this->template == '') {
            $this->template = 'template/default'; //view to load
        }
        if (!$this->input->is_cli_request()) {
            if (substr_count($this->uri->segment(1), 'api') > 0) {
                $this->isApi = true;
                //get and authenticate api key
                $this->data = json_decode(file_get_contents('php://input'));
            } else {
                //not api -- site
                if (!$this->ion_auth->logged_in()) {
                    if (!in_array($this->router->class, $this->allowedControllers)) {
                        //comment this out if you don't want authentication at all:
                        // redirect('/login');
                    }
                } else {
                    $this->data['user'] = $this->ion_auth->user()->row();
                    if ($this->ion_auth->is_admin()) {
                        //$this->template = 'template/admin';
                    }
                }
            }
        } else {
            $this->isCLI = true;
        }
    }

    public function index(){
        $this->load->view('partials/default-primary');
    }

    public function _output() {
        if ($this->isApi) {
            if (isset($_GET['format'])) {
                if ($_GET['format'] == 'xml') {
                    $this->output_xml();
                } else {
                    $this->output_json();
                }
            } else {
                $this->output_json();
            }
        } else {
            //$d['content'] = $o;
            foreach($this->data as $k=>$v) {
                $d[$k]=$v;
            }
            if (!$this->view) {
                // class/method/data
                // for example: http://myapp.dev/welcome
                // this will automatically load
                // views/welcome/index
                $d['content'] = $this->load->view($this->router->class . '/' . $this->router->method, $this->data, true);
            } else {
                $d['content'] = $this->load->view($this->view, $this->data, true);
            }
            $template = $this->load->view($this->template, $d, true);
            echo $template;
        }
    }

    private function output_json() {
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        echo json_encode($this->out);
    }

    private function output_xml() {
        $outstr = '<?xml version="1.0" encoding="ISO-8859-1"?><response>';
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/xml');
        $outstr.= $this->xmlencode($this->out);
        echo $outstr . '</response>';
    }

    private function xmlencode($arr) {
        $outstr = '';
        foreach ($arr as $k => $v) {
            $k = (is_int($k)) ? 'item' : $k;
            if (is_array($v)) {
                $outstr.='<' . $k . '>' . $this->xmlencode($v) . '</' . $k . '>';
            } else {
                $outstr.='<' . $k . '>' . str_replace(array("&", "<", ">", "\"", "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $v) . '</' . $k . '>';
            }
        }
        return $outstr;
    }

}

?>
