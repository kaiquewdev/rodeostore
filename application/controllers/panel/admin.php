<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->library('table');
	
		$data['menu'] = make_admin_menu();
		$data['products'] = $this->db->get('products');
		
		$this->load->view('elements/panel/header', $data);
		$this->load->view('panel/index', $data);
		$this->load->view('elements/panel/footer');
	}
	
	public function products($action=false, $id=false)
	{
		if(!$action && !$id) {
			$this->load->library('table');
	
			$data['menu'] = make_admin_menu();
			$data['products'] = $this->db->get('products');
		
			$this->load->view('elements/panel/header', $data);
			$this->load->view('panel/products', $data);
			$this->load->view('elements/panel/footer');
		} elseif($action == 'new' && !$id) {
			$this->load->helper('form');
			
			$data['menu'] = make_admin_menu();
			
			$this->load->view('elements/panel/header', $data);
			$this->load->view('panel/new_product');
			$this->load->view('elements/panel/footer');
		} elseif($action == 'remove' && $id) {
			echo $id;
		}
	}
	
	public function categorys()
	{
		$data['menu'] = make_admin_menu();
		$this->load->view('elements/panel/header', $data);
		//$this->load->view('panel/categorys');
		$this->load->view('elements/panel/footer');
	}
	
	public function demands()
	{
		$data['menu'] = make_admin_menu();
		$this->load->view('elements/panel/header', $data);
		//$this->load->view('panel/demands');
		$this->load->view('elements/panel/footer');
	}
	
	public function comments()
	{
		$data['menu'] = make_admin_menu();
		$this->load->view('elements/panel/header', $data);
		//$this->load->view('panel/comments');
		$this->load->view('elements/panel/footer');
	}
}
