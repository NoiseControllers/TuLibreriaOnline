<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 30/08/2018
 * Time: 17:56
 */

class GenerateSlug
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('text');
        $this->CI->load->helper('url');
    }

    public function slug($books)
    {
        foreach ($books as $i=>$element) {
            $books[$i]['slug'] = strtolower(url_title(convert_accented_characters($books[$i]['title'])));
        }

        return $books;
    }
}