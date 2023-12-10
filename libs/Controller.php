<?php

require_once "Model.php";

class Controller
{

    public $model;
    public $title;
    public $description;
    public $favicon;
    public $keywords;
    public $owner;
    public $siteName;
    public $github;
    public $linkedin;
    public $x;
    public $instagram;


    public function __construct()
    {
        $this->model = new Model();
        $this->getWebInfoData();
    }

    public function getWebInfoData()
    {
        $data = $this->model->webInfoData();
        $this->title = $data["webinfo_title"];
        $this->description = $data["webinfo_description"];
        $this->favicon = $data["webinfo_favicon"];
        $this->keywords = $data["webinfo_keywords"];
        $this->owner = $data["webinfo_owner"];
        $this->siteName = $data["webinfo_sitename"];
        $this->github = $data["webinfo_github"];
        $this->linkedin = $data["webinfo_linkedin"];
        $this->x = $data["webinfo_x"];
        $this->instagram = $data["webinfo_instagram"];
    }
}