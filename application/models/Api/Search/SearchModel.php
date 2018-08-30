<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 19/08/2018
 * Time: 1:55
 */

class SearchModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function search($key)
    {
        /*
            Una mejor solucion para un futuro, seria cachear la libreria para ahorranos tener que realizar consultas.
        */
        $query = $this->db
                    ->select('title,slug')
                    ->from('books')
                    ->like('title', $key)
                    ->or_like('isbn', $key)
                    ->get()
                    ->result();
        return json_encode($query);
    }
}