<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Driver";
        $data['driver'] = $this->Model_driver->getStatusDriver();
        $this->load->view('layout/header', $data);
        $this->load->view('driver/index', $data);
        $this->load->view('layout/footer');
    }

    public function updateDriver()
    {
        $update = $this->input->post('update');
        if ($update == "Aktifkan") {
            // $data['driver'] = $this->Model_driver->getStatusDriver();
            // var_dump($data);
            $this->Model_driver->activated();
            header("Location:" . base_url('Home/') .  "");
        } else {
            // $data['driver'] = $this->Model_driver->getStatusDriver();
            // var_dump($data);
            $this->Model_driver->nonactivated();
            header("Location:" . base_url('Home/') .  "");
        }
        // $data['driver'] = $this->Model_driver->activated();
        // header("Location:" . base_url('Home/') .  "");
    }
}
