<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("Karyawan_model");
    }

    public function index()
    {
        $data["karyawan"] = $this->Karyawan_model->getAll();
        $this->load->view("admin/product/list_karyawan", $data);
    }
}
?>
