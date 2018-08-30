<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 04/08/2018
 * Time: 0:59
 */

class Libro extends CI_Controller
{
    private $bookData;

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->library('parser');
        $this->load->model('MainModel');
        $this->load->model('CategoriesModel');
        $this->load->model('Books');
    }

    public function index($title = null, $asin=null)
    {
        $this->existBook($asin);

        $ConfigurationSite = $this->MainModel->Configuration();
        $siteCategories = $this->CategoriesModel->Categories();

        $data = [
            'site_name' => $ConfigurationSite->name,
            'seo_title' => $ConfigurationSite->title,
            'seo_description' => $ConfigurationSite->description,
            'site_logo' => $ConfigurationSite->logo,
            'site_url' => base_url(),
            'site_categories' => $siteCategories,
        ];

        $book = [
            'book_title' => $this->bookData->title,
            'book_author' => $this->bookData->author,
            'book_categorie' => 'Desconocido',
            'book_checkOutDate' => $this->bookData->fecha,
            'book_thumbnail' => $this->bookData->thumbnail,
            'book_sinopsis' => $this->bookData->overview
        ];

        $this->parser->parse('template/default/libreria_head', $data);
        $this->parser->parse('template/default/libreria_menu_top', $data);
        $this->parser->parse('template/default/Book/book_view', $book);
        $this->load->view('template/default/libreria_footer');

    }

    private function existBook($asin)
    {
        $book = $this->Books->bookData($asin);
        if (is_object($book))
            $this->bookData = $book;
        else
            show_404();
    }
}