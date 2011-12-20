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
		$data['menu'] = make_admin_menu();
		$data['categorys'] = array();
		$data['products'] = $this->db->get('products');
		
		$categorys = $this->db->get('categorys');
		
		foreach($categorys->result() as $r) {
			$data['categorys'][$r->name] = $r->name;	
		}
	
		if(!$action && !$id) {
			$this->load->library('table');
		
			$this->load->view('elements/panel/header', $data);
			$this->load->view('panel/products', $data);
			$this->load->view('elements/panel/footer');
		} elseif($action == 'new' && !$id) {
			$this->load->helper('form');
			
			$this->load->view('elements/panel/header', $data);
			$this->load->view('panel/new_product', $data);
			$this->load->view('elements/panel/footer');
		} elseif($action == 'insert' && !$id) {
			$this->load->library('form_validation');
			
			$config = array(
				array(
						'product_name', 
						'Nome do Produto', 
						'required'),
				array(
						'product_qty', 
						'Quantidade do Produto', 
						'required'),
				array(
						'product_weight', 
						'Peso do Produto', 
						'required'),
				array(
						'product_heigth', 
						'Altura do Produto', 
						'required'),
				array(
						'product_width', 
						'Largura do Produto', 
						'required'),
				array(
						'product_category', 
						'Categoria do Produto', 
						'required'),
				array(
						'product_description', 
						'Descrição do Produto', 
						'required'),
			);
			
			$this->form_validation->set_rules($config);
			
			$this->load->view('elements/panel/header', $data);
			
			if($this->form_validation->run() == false) {		
				$this->load->view('panel/new_product', $data);
			} else {
				$this->load->view('panel/new_product_sucess');
			}
			
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
