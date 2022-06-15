<?php
class Products_model extends CI_model
{
	function create($formArray)
	{
		$this->db->insert('product',$formArray);
	}
	function all()
	{
		return $product = $this->db->get('product')->result_array();
	}
	function getProduct($id)
	{  
		$this->db->where('id',$id);
		return $product = $this->db->get('product')->row_array();
	}
	function updateProduct($id,$formArray)
	{
		$this->db->where('id',$id);
		$this->db->update('product',$formArray);
	}
	function deleteProduct($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('product');
	}
}
?>