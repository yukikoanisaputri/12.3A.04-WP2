<?php

class Belajar extends CI_Controller 
{
    public function index()
    {
        $this->load->view('welcome_message'); 
    }
    public function parsing()
    {
        //$data['bio'] = "Nama Saya Yuki";
       $data=array(
        'nama' => "Yukiko Anisa Putri",
        'pekerjaan' => "Asdos"
       );
       $this->load->view('view_belajar', $data);
    }
}