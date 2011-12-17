<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roadstore extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */						
	public function index()
	{
		$data['menu'] = make_menu();
		$this->load->view('elements/header', $data);
		$this->load->view('default/index');
		$this->load->view('elements/footer');
	}
	
	public function products()
	{
		$data['menu'] = make_menu();
		$this->load->view('elements/header', $data);
		$this->load->view('default/products');
		$this->load->view('elements/footer');
	}
	
	public function about()
	{
		$data['menu'] = make_menu();
		$this->load->view('elements/header', $data);
		$this->load->view('default/about');
		$this->load->view('elements/footer');
	}
	
	public function contact()
	{
		$data['menu'] = make_menu();
		$this->load->view('elements/header', $data);
		$this->load->view('default/contact');
		$this->load->view('elements/footer');
	}
}
