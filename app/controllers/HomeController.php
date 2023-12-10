<?php

require_once "libs/Controller.php";
require_once "app/models/HomeModel.php";

class HomeController extends Controller
{
    public function index()
    {
        $this->title  = "Ana Sayfa | ". $this->title;

        require_once ("app/views/home.php");
    }
}