<?php
class History_model extends CI_model
{
	function create_quote($formArray)
	{
		$this->db->insert('quote',$formArray);
	}
	function create_proposal($formArray)
	{
		$this->db->insert('proposal',$formArray);
	}
	function create_payment($formArray)
	{
		$this->db->insert('payment',$formArray);
	}
	function getquote($quote_id)
	{
		$this->db->where('quote_id',$quote_id);
		return $quote = $this->db->get('quote')->row_array();
	}
	function getproposal($proposal_id)
	{
		$this->db->where('proposal_id',$proposal_id);
		return $proposal = $this->db->get('proposal')->row_array();
	}
	function getpayment($pay_id)
	{
		$this->db->where('pay_id',$pay_id);
		return $payment = $this->db->get('payment')->row_array();
	}

	function update_quote($quote_id,$formArray)
	{
		$this->db->where('quote_id',$quote_id);
		$this->db->update('quote',$formArray);
	}
	function update_proposal($proposal_id,$formArray)
	{
		$this->db->where('proposal_id',$proposal_id);
		$this->db->update('proposal',$formArray);
	}
	function update_payment($pay_id,$formArray)
	{
		$this->db->where('pay_id',$pay_id);
		$this->db->update('payment',$formArray);
	}
	function delete_quote($quote_id)
	{
		$this->db->where('quote_id',$quote_id);
		$this->db->delete('quote');
	}
	function delete_proposal($proposal_id)
	{
		$this->db->where('proposal_id',$proposal_id);
		$this->db->delete('proposal');
	}
	function delete_payment($pay_id)
	{
		$this->db->where('pay_id',$pay_id);
		$this->db->delete('payment');
	}
	function all_quote()
	{
		return $history = $this->db->get('quote')->result_array();
	}
	function all_proposal()
	{
		return $history = $this->db->get('proposal')->result_array();
	}
	function all_payment()
	{
		return $history = $this->db->get('payment')->result_array();
	}
	function all()
	{
		return $history = $this->db->get('global_history')->result_array();
	}
	
}
?>