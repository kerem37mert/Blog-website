<?php

require_once "libs/Controller.php";
require_once "app/models/ContentsModel.php";
require_once "services/cleanText.php";

class ContentsController extends Controller
{
    public $contentsModel;
    private $limit;
    private $start;
    public $page;

    public $totalContents;
    public $totalPage;
    public $contentsData;


    private function initializeData()
    {
        if(isset($_GET["page"])):
            if(is_numeric($_GET["page"]) && $_GET["page"] > 0): // gelen veri string olmamalı ve > 0 olmalı
                $this->page = cleanText($_GET["page"]);
            else:
                header("location:".BASE_URL."404");
                exit;
            endif;
        else:
            $this->page = 1;
        endif;

        $this->limit = 10;     //Sayfada gözükcek maksimum veri miktarı
        $this->start = ($this->page - 1) * $this->limit;
        $this->totalPage = ceil($this->totalContents / $this->limit);


        if($this->page > $this->totalPage):  //Page total pageden büyükse 404
            header("location:".BASE_URL."404");
            exit;
        endif;
    }

    private function getContentsData()
    {
        $this->contentsData = $this->contentsModel->contentsData($this->start, $this->limit);
    }

    public function getContentCount()
    {
        $this->totalContents = $this->contentsModel->contentCount();
    }


    public function index()
    {
        $this->contentsModel = new ContentsModel();
        $this->getContentCount();
        $this->initializeData();
        $this->getContentsData();

        $this->title = "İçerikler | ". $this->title;

        require_once "app/views/contents.php";
    }
}