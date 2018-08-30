<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 03/08/2018
 * Time: 18:39
 */

class CategoriesModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Categories()
    {
        $this->db->cache_on();
        $sql =
            $this->db
                ->select('*')
                ->from('categories')
                ->where('active','1')
                ->get()
                ->result_array();
        $this->db->cache_off();

        return $sql;
    }

    public function checkExistCategorie($slug)
    {
        return
            $this->db
                ->select('*')
                ->from('categories')
                ->where('slug',$slug)
                ->where('active','1')
                ->get()
                ->row();
    }

    public function category($idCategory)
    {
        return
            $this->db
                ->select('*')
                ->from('categories')
                ->where('id',$idCategory)
                ->get()
                ->row();
    }
}
