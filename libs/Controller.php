<?php

require_once "Model.php";
require_once "services/cleanText.php";

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

    public $randomContents;
    public $lastContents;


    public function __construct()
    {
        $this->model = new Model();
        $this->getWebInfoData();
        $this->getRandomContentsData();
        $this->getLastContents();
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

    private function getRandomContentsData()
    {
        $this->randomContents = $this->model->randomContentsData();
    }

    private function getLastContents()
    {
        $this->lastContents = $this->model->lastContentsData();
    }

    public function getSearchContents()
    {
        header('Content-Type: application/json; charset=utf-8');

        $contentsDataOBJ = $this->model->searchContents(cleanText($_GET["s"]));
        $contentDataArray = [];

        foreach($contentsDataOBJ as $data):
            array_push($contentDataArray, ["content_title" => $data->content_title, "content_url" => BASE_URL."content/".$data->content_url]);
        endforeach;

        echo json_encode($contentDataArray);
    }
}