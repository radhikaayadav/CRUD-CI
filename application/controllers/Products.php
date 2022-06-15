<?php
class Products extends CI_controller
{
	function index(){
		$this->load->model('Products_model');
		$product = $this->Products_model->all();
		$data = array();
		$data['product'] = $product;
		$this->load->view('list',$data);

	}

	
	function create()
    { 
    	$this->load->model('Products_model');
    	$this->form_validation->set_rules('title','Name','required');
    	$this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('image','image','required');
    	if($this->form_validation->run() == false)
    	{
    		$this->load->view('create');
    	}
    	else
    	{
    		$formArray = array();
    		$formArray['title'] = $this->input->post('title');
    		$formArray['description'] = $this->input->post('description');
            $formArray['price'] = $this->input->post('price');
            $formArray['image'] = $this->input->post('image');
    		$formArray['created_at'] = date('Y-m-d h:i:s');
            $this->Products_model->create($formArray);
            $this->session->set_flashdata('success','Record added successfully');
            redirect(base_url().'index.php/products/index');


    	}
    }

    function edit($id)
    {
    	$this->load->model('Products_model');
    	$product = $this->Products_model->getProduct($id);
    	$data = array();
    	$data['product'] = $product;
        $this->form_validation->set_rules('title','Name','required');
    	$this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('price','Price','required');
         $this->form_validation->set_rules('image','image','required');
    	if($this->form_validation->run() == false)
    	{
    	    $this->load->view('edit',$data);
        }
        else
        {
        	$formArray = array();
        	$formArray['title'] = $this->input->post('title');
        	$formArray['description'] = $this->input->post('description');
            $formArray['price'] = $this->input->post('price');
            $formArray['image'] = $this->input->post('image');

        	$this->Products_model->updateProduct($id,$formArray);
        	$this->session->set_flashdata('success','Record updated successfully');
        	redirect(base_url().'index.php/products/index');
        }


    }
    function delete($id)
    {
      $this->load->model('Products_model');
      $product = $this->Products_model->getProduct($id);
      if(empty($product))
      {
      	$this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/products/index');
      }
      $this->Products_model->deleteProduct($id);
      $this->session->set_flashdata('success','Record deleted successfully');
      redirect(base_url().'index.php/products/index');
        


      
    }
}
?>