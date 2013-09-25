<?php
class News extends MY_Controller {

	private $message = "";

	public function __construct()
	{
		parent::__construct();
		$this->template="template/demo";
		$this->load->model('news_model');
	}

	public function index()
	{
		
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';
		$data['message'] = $this->message;

		$this->data['header']='demo/partials/header';

		// $this->load->view('template/header', $data);
		$this->load->view('news/index', $data);
		// $this->load->view('template/footer');
	}

	public function view($slug)
	{
		// die(var_dump($slug));
		$data['news_item'] = $this->news_model->get_news($slug);

		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('template/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			//From the demo:
			$this->load->view('template/header', $data);
			$this->load->view('news/create');
			$this->load->view('template/footer');
		}

		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}

	//Coming soon: Update and Delete!
}