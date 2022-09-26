<?php
class Products_model extends CI_model
{
	function create($formArray)
	{
		$this->db->insert('products',$formArray);

	}
	function all()
	{
		return $product = $this->db->get('products')->result_array();
	}
	function getProduct($id)
	{  
		$this->db->where('id',$id);
		return $product = $this->db->get('products')->row_array();
	}
	function updateProduct($id,$formArray)
	{
		$this->db->where('id',$id);
		$this->db->update('products',$formArray);
	}
	function deleteProduct($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('products');
	}
}
?>