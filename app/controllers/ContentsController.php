<?php

require_once "libs/Controller.php";

class ContentsController extends Controller
{
    public function index()
    {
        $this->title = "İçerikler | ". $this->title;

        require_once "app/views/contents.php";
    }
}