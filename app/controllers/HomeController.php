<?php

require_once "libs/Controller.php";
require_once "app/models/HomeModel.php";

class HomeController extends Controller
{
    private $homeModel;
    public $contentsData;

    public function getContentsData()
    {
        $this->contentsData = $this->homeModel->contentsData();
    }

    public function index()
    {
        $this->homeModel = new HomeModel();
        $this->getContentsData();
        $this->title  = "Ana Sayfa | ". $this->title;

        require_once ("app/views/home.php");
    }
}