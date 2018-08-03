<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 03/08/2018
 * Time: 18:20
 */

class MainModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Configuration()
    {
        $this->db->cache_on();
        $sql =  $this->db
            ->select('*')
            ->from('configuration')
            ->get()
            ->row();
        $this->db->cache_off();

        return $sql;
    }

}