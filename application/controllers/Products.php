<?php
class Products extends CI_controller
{
	function index(){
		$this->load->model('Products_model');
		$product = $this->Products_model->all();
		$data = array();
		$data['products'] = $product;
		$this->load->view('list',$data);
        $errorUploadType = $statusMsg = '';


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

            if($this->input->post('createproduct')){ 

            if(!empty($_FILES['image']['name']) && count(array_filter($_FILES['image']['name'])) > 0){ 
                 echo "asdas"; exit;
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['image']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['image']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['image']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['image']['size'][$i]; 
                  
                    $uploadPath = 'uploads/files/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                   
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                   
                    if($this->upload->do_upload('file')){ 
                       
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                    }else{  
                        $errorUploadType .= $_FILES['image']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                   
                    $insert = $this->file->insert($uploadData); 
                    
                    $statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
            }else{ 
                $statusMsg = 'Please select image files to upload.'; 
            } 
            } 
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