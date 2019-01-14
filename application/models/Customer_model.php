<?php defined('BASEPATH') OR exit ('No direct script acces allowed');

  /**
   *
   */
  class Customer_model extends CI_Model
  {
    public $_table = "customer";
    public $customer_id;
    public $nama;
    public $address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }}
?>
