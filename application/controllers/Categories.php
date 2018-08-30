<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 07/08/2018
 * Time: 17:56
 */

class Categories extends CI_Controller
{
    private $idCategory;
    private $nameCategory;

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->library('parser');
        $this->load->model('CategoriesModel');
        $this->load->model('MainModel');
        $this->load->model('Books');
        $this->load->library('GenerateSlug');
    }

    public function index($name=null)
    {
        if (null === $name) {
            echo 'Page_blank';
            return false;
        }

        $this->existCategorie($name);
        $ConfigurationSite = $this->MainModel->Configuration();
        $siteCategories = $this->CategoriesModel->Categories();
        $categoryInfo = $this->CategoriesModel->category($this->idCategory);
        $categoryBooks = $this
            ->generateslug
            ->slug($this->Books->booksByCategory($this->idCategory));

        $data = [
            'site_name' => $ConfigurationSite->name,
            'seo_title' => $ConfigurationSite->title,
            'seo_description' => $ConfigurationSite->description,
            'site_logo' => $ConfigurationSite->logo,
            'site_url' => base_url(),
            'site_categories' => $siteCategories,
        ];

        $dataCategory = [
            'category_name' => $categoryInfo->name,
            'category_books' => $categoryBooks
        ];

        $this->parser->parse('template/default/libreria_head', $data);
        $this->parser->parse('template/default/libreria_menu_top', $data);
        $this->parser->parse('template/default/Categories/category_view', $dataCategory);
        $this->load->view('template/default/libreria_footer');

    }

    public function existCategorie($name)
    {
        $categorieData = $this->CategoriesModel->checkExistCategorie($name);

        if (false === is_object($categorieData))
            show_404();

        $this->idCategory = $categorieData->id;
        $this->nameCategory = $categorieData->name;
    }

    public function categories()
    {

    }
}