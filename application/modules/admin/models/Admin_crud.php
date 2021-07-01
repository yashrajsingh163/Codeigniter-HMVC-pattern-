<?php
class Admin_crud extends CI_Model
{
   function index(){
      return $this->db->get('admin')->result_array();
   }
}
?>
