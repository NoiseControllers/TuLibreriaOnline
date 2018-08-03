<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 03/08/2018
 * Time: 18:47
 */

class Books extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function newBooks()
    {
        return $this->db->select('author,title,thumbnail')
            ->from('books')
            ->order_by('id','ASC')
            ->limit('6')
            ->get()
            ->result_array();
    }

    public function randomBooks()
    {
        return
            $this->db
            ->select('author,title,thumbnail')
            ->from('books')
            ->order_by('rand()')
            ->limit('20')
            ->get()
            ->result_array();
    }
}