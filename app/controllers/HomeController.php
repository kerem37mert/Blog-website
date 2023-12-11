<?php

require_once "libs/Controller.php";
require_once "app/models/HomeModel.php";

class HomeController extends Controller
{
    private $homeModel;
    public $contentsData;
    public $highlightsData;


    private function getContentsData()
    {
        $this->contentsData = $this->homeModel->contentsData();
    }

    private function gethighlightsData()
    {
        $this->highlightsData = $this->homeModel->highlightsData();
    }


    public function index()
    {
        $this->homeModel = new HomeModel();
        $this->getContentsData();
        $this->gethighlightsData();

        $this->title  = "Ana Sayfa | ". $this->title;

        require_once ("app/views/home.php");
    }
}