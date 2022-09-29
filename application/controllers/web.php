<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        //$data['judul'] = " Tugas Pertemuan 3, Membuat Template Sederhana ";
        $data=array(
            'pert' => "pertemuan 3",
            'jenis' => "template sederhana"
        );

        $this->load->view('v_index', $data);
    }
    public function about()
    {
        $this->load->view('v_about');
    }
 

}