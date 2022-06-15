<?php
class Quote extends CI_controller
{
    function index()
    {
        $this->load->view('mainpage');
    }
	function tracking_index()
    {
		$this->load->model('History_model');
		$history = $this->History_model->all();
		$data = array();
		$data['history'] = $history;
		$this->load->view('tracking',$data);
	}
    function quote_index()
    {
        $this->load->model('History_model');
        $quote = $this->History_model->all_quote();
        $data = array();
        $data['quote'] = $quote;
        $this->load->view('quote_list',$data);
    }
    function proposal_index()
    {
        $this->load->model('History_model');
        $proposal = $this->History_model->all_proposal();
        $data = array();
        $data['proposal'] = $proposal;
        $this->load->view('proposal_list',$data);
    }
    function payment_index()
    {
        $this->load->model('History_model');
        $payment = $this->History_model->all_payment();
        $data = array();
        $data['payment'] = $payment;
        $this->load->view('payment_list',$data);
    }

	
	function create_quote()
    { 
    	$this->load->model('History_model');
    	
    	$this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('premium_amount','Premium Amount','required');
    	if($this->form_validation->run() == false)
    	{
    		$this->load->view('add_quote');
    	}
    	else
    	{
    		$formArray = array();
    		$formArray['name'] = $this->input->post('name');
    		$formArray['premium_amount'] = $this->input->post('premium_amount');
            $this->History_model->create_quote($formArray);
            $this->session->set_flashdata('success','Record added successfully');
            redirect(base_url().'index.php/quote/quote_index');
        }

    }
    function create_proposal()
    { 
        $this->load->model('History_model');
        
        $this->form_validation->set_rules('quote_id','Number','required');
        $this->form_validation->set_rules('proposal_details','Proposal Details','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('add_pro');
        }
        else
        {
            $formArray = array();
            $formArray['quote_id'] = $this->input->post('quote_id');
            $formArray['proposal_details'] = $this->input->post('proposal_details');
            $this->History_model->create_proposal($formArray);
            $this->session->set_flashdata('success','Record added successfully');
            redirect(base_url().'index.php/quote/proposal_index');
        }
    }
    function create_payment()
    { 
        $this->load->model('History_model');
        
        $this->form_validation->set_rules('quote_id','Number','required');
        $this->form_validation->set_rules('proposal_id','Number','required');
        $this->form_validation->set_rules('amount','Number','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('add_pay');
        }
        else
        {
            $formArray = array();
            $formArray['quote_id'] = $this->input->post('quote_id');
            $formArray['proposal_id'] = $this->input->post('proposal_id');
            $formArray['amount'] = $this->input->post('amount');
            $this->History_model->create_payment($formArray);
            $this->session->set_flashdata('success','Record added successfully');
            redirect(base_url().'index.php/quote/payment_index');
        }
    }
    function edit_quote($quote_id)
    {
        $this->load->model('History_model');
        $quote = $this->History_model->getquote($quote_id);
        $data = array();
        $data['quote'] = $quote;
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('premium_amount','Number','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('edit_quote',$data);
        }
        else
        {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['premium_amount'] = $this->input->post('premium_amount');

            $this->History_model->update_quote($quote_id,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/quote/quote_index');
        }
    }
    function edit_proposal($proposal_id)
    {
        $this->load->model('History_model');
        $proposal = $this->History_model->getproposal($proposal_id);
        $data = array();
        $data['proposal'] = $proposal;
        $this->form_validation->set_rules('quote_id','Number','required');
        $this->form_validation->set_rules('proposal_details','Proposal details','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('edit_proposal',$data);
        }
        else
        {
            $formArray = array();
            $formArray['quote_id'] = $this->input->post('quote_id');
            $formArray['proposal_details'] = $this->input->post('proposal_details');

            $this->History_model->update_proposal($proposal_id,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/quote/proposal_index');
        }
    }
    function edit_payment($pay_id)
    {
        $this->load->model('History_model');
        $payment = $this->History_model->getpayment($pay_id);
        $data = array();
        $data['payment'] = $payment;
        $this->form_validation->set_rules('quote_id','Number','required');
        $this->form_validation->set_rules('proposal_id','Number','required');
        $this->form_validation->set_rules('amount','Number','required');
        if($this->form_validation->run() == false)
        {
            $this->load->view('edit_payment',$data);
        }
        else
        {
            $formArray = array();
            $formArray['quote_id'] = $this->input->post('quote_id');
            $formArray['proposal_id'] = $this->input->post('proposal_id');
            $formArray['amount'] = $this->input->post('amount');
            $this->History_model->update_payment($pay_id,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/quote/payment_index');
        }
    }
    function delete_quote($quote_id)
    {
      $this->load->model('History_model');
      $quote = $this->History_model->getquote($quote_id);
      if(empty($quote))
      {
        $this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/quote/index');
      }
      $this->History_model->delete_quote($quote_id);
      $this->session->set_flashdata('success','Record deleted successfully');
      redirect(base_url().'index.php/quote/quote_index');     
    }
    function delete_proposal($proposal_id)
    {
      $this->load->model('History_model');
      $proposal = $this->History_model->getproposal($proposal_id);
      if(empty($proposal))
      {
        $this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/quote/proposal_index');
      }
      $this->History_model->delete_proposal($proposal_id);
      $this->session->set_flashdata('success','Record deleted successfully');
      redirect(base_url().'index.php/quote/proposal_index');     
    }
    function delete_payment($pay_id)
    {
      $this->load->model('History_model');
      $payment = $this->History_model->getpayment($pay_id);
      if(empty($payment))
      {
        $this->session->set_flashdata('failure','Record not found in database');
        redirect(base_url().'index.php/quote/payment_index');
      }
      $this->History_model->delete_payment($pay_id);
      $this->session->set_flashdata('success','Record deleted successfully');
      redirect(base_url().'index.php/quote/payment_index');     
    }
}
?>