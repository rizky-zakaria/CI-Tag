<?php

class Model_driver extends CI_Model
{

    public $status = '1';

    public function activated()
    {
        $query = "UPDATE `tb_driver` SET `status` = '1' WHERE `tb_driver`.`id_driver` = 1";
        $this->db->query($query);
    }

    public function nonactivated()
    {
        $query = "UPDATE `tb_driver` SET `status` = '0' WHERE `tb_driver`.`id_driver` = 1";
        $this->db->query($query);
    }

    public function getStatusDriver()
    {
        $id = 1;
        $query = "SELECT * FROM tb_driver WHERE id_driver= $id";
        return $this->db->query($query)->result_array();
    }

    public function getAllDriver()
    {
        return $this->db->get('tb_driver')->result_array();
    }
}
