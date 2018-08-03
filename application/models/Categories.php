<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 03/08/2018
 * Time: 18:39
 */

class Categories extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Categories()
    {
        $this->db->cache_on();
        $sql =  $this->db->get('categories')->result_array();
        $this->db->cache_off();

        return $sql;
    }
}