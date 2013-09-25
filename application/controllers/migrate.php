<?php 
defined("BASEPATH") or exit("No direct script access allowed");

class Migrate extends CI_Controller{

	public function __construct()
	{
	parent::__construct();



	$this->input->is_cli_request() 
	  or exit("Execute via command line: php index.php migrate");

	$this->load->library('migration');
	}

    public function index($version){
        // $this->load->library("migration");

	      // if(!$this->migration->version($version)){
	      //     show_error($this->migration->error_string());
	      // }
	      // else echo "success";
    	die("You requested 'index'; Please use the 'version' method.".PHP_EOL);
    }

    public function version($version){
        // $this->load->library("migration");

      if(!$this->migration->version($version)){
          show_error($this->migration->error_string());
      }
      else echo "Success! DB Updated to version ".$version.PHP_EOL;
    }

    public function current(){
    	// $this->load->library('migration');
    	if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		}
		else echo "Success! DB Updated to current version.".PHP_EOL;
	}
}

