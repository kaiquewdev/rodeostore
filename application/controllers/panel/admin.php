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
			
			$this->form_validation->set_rules('product_name', 'Nome do Produto', 'required');
			$this->form_validation->set_rules('product_qty', 'Quantidade do Produto', 'required');
			$this->form_validation->set_rules('product_weight', 'Peso do Produto', 'required');
			$this->form_validation->set_rules('product_height', 'Altura do Produto', 'required');
			$this->form_validation->set_rules('product_width', 'Largura do Produto', 'required');
			$this->form_validation->set_rules('product_category', 'Categoria do Produto', 'required');
			$this->form_validation->set_rules('product_description', 'Descrição do Produto', 'required');
			
			$this->form_validation->set_message('required', 'É preciso preencher o campo %s.');
			
			$this->load->view('elements/panel/header', $data);
			
			if($this->form_validation->run() == false) {		
				$this->load->view('panel/new_product', $data);
			} else {
				$to_insert = array(
					'name' => $this->input->post('product_name'),
					'qty' => $this->input->post('product_qty'),
					'weight' => $this->input->post('product_weight'),
					'height' => $this->input->post('product_height'),
					'width' => $this->input->post('product_width'),
					'category' => $this->input->post('product_category'),
					'description' => $this->input->post('product_description')												
				);
				
				$filter = array('name' => $to_insert['name'],
								'category' => $to_insert['category']);
				
				$query = $this->db->get_where('products', $filter);
				
				if(!$query->result()){
					if($this->db->insert('products', $to_insert)) {
						$this->load->view('panel/new_product_sucess');
					}
				} else {
					redirect('panel/admin/products/', 'refresh');
				}
			}
			
			$this->load->view('elements/panel/footer');
			
		} elseif($action == 'remove' && $id) {
			if($this->db->delete('products', array('id' => $id))) {
				redirect('panel/admin/products', 'refresh');
			}
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
	
	public function test()
	{
		//echo "Test".PHP_EOL;
	}
}
