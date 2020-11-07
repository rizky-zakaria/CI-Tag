<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Driver";
        $data['driver'] = $this->Model_driver->getAllDriver();
        // var_dump($data['driver']);
        $this->load->view('layout/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }
}
