<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 18/08/2018
 * Time: 18:17
 */

class SearchController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api/Search/SearchModel');
    }

    public function search($key)
    {
        $resultJSON = $this->SearchModel->search($key);
        echo $resultJSON;
    }

}