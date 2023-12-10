<?php

require_once "libs/Controller.php";
require_once "app/models/AboutModel.php";

class AboutController extends Controller
{
    private $aboutModel;
    public $aboutTitle;
    public $aboutContent;

    private function getAboutData()
    {
        $data = $this->aboutModel->aboutData();
        $this->aboutTitle = $data["about_title"];
        $this->aboutContent = $data["about_content"];
    }

    public function index()
    {
        $this->aboutModel = new AboutModel();
        $this->getAboutData();
        $this->title = "Hakkımda | ". $this->title;


        require_once "app/views/about.php";
    }
}