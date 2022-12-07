<?php

class Movie
{
    public $title;
    public $year;
    public $poster = "https://www.pacificfoodmachinery.com.au/media/catalog/product/placeholder/default/no-product-image-400x400.png";
    public $genre;
    public $wikiPage = "ND";

    /**
     * @param String title
     * @param Number year
     * @param String genre
     */
    public function __construct($_title, $_year = null, $_genre = null)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    //set poster from an url parameter
    public function setPoster($_poster)
    {
        $this->poster = $_poster;
    }

    //set wikipedia movie url 
    public function setwikiPage($_wikiPage)
    {
        $this->wikiPage = $_wikiPage;
    }

    //add genre in a movie
    public function addGenre($_newGenre)
    {
        $this->genre .=  ', ' . $_newGenre;
    }
}
