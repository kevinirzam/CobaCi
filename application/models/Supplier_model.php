<?php defined('BASEPATH') OR exit ('No direct script acces allowed');

  /**
   *
   */
  class Supplier_model extends CI_Model
  {
    public $_table = "supplier";
    public $supplier_id;
    public $suplier_name;
    public $supplier_address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }}
?>
