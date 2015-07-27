<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 7/26/15
 * Time: 7:51 PM
 */

class Search {
    public $term;


    public function __construct($term=null)
    {
        $this->term = $term;
    }
}