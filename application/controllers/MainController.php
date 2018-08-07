<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 03/08/2018
 * Time: 12:20
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->library('parser');
        $this->load->model('MainModel');
        $this->load->model('Categories');
        $this->load->model('Books');
    }

    public function index()
    {

        $ConfigurationSite = $this->MainModel->Configuration();
        $siteCategories = $this->Categories->Categories();
        $newBooks = $this->Books->newBooks();
        $randomBooks = $this->Books->randomBooks();

        $data = [
            'site_name' => $ConfigurationSite->name,
            'seo_title' => $ConfigurationSite->title,
            'seo_description' => $ConfigurationSite->description,
            'site_logo' => $ConfigurationSite->logo,
            'site_url' => base_url(),
            'site_categories' => $siteCategories,
        ];

        $books = [
            'newBooks' => $newBooks,
            'randomBooks' => $randomBooks
        ];

        $this->parser->parse('template/default/libreria_head', $data);
        $this->parser->parse('template/default/libreria_menu_top', $data);
        $this->parser->parse('template/default/libreria_index', $books);
        $this->load->view('template/default/libreria_footer');

    }
}