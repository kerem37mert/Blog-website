<?php

require_once "libs/Controller.php";

class ContentsController extends Controller
{
    public $page = 1;
    
    public function index()
    {
        $this->title = "İçerikler | ". $this->title;

        require_once "app/views/contents.php";
    }
}