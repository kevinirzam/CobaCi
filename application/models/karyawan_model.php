<?php defined('BASEPATH') OR exit ('No direct script acces allowed');

  /**
   *
   */
  class karyawan_model extends CI_Model
  {
    public $_table = "karyawan";
    public $karyawan_id;
    public $nama;
    public $address;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }}
?>
