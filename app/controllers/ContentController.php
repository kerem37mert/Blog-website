<?php

require_once "libs/Controller.php";
require_once "app/models/ContentModel.php";

class ContentController extends Controller
{
    private $contentModel;
    public $content_title;
    public $content_desc;
    public $content_maincontent;

    private function getContentData($url_name)
    {
        $data = $this->contentModel->contentData($url_name);

        if (empty($data)):
            header("location:".BASE_URL."404");
            exit;
        else:
            $this->content_title = $data["content_title"];
            $this->content_desc = $data["content_desc"];
            $this->content_maincontent = $data["content_maincontent"];
        endif;
    }

    public function index($url)
    {
        $this->contentModel = new ContentModel();

        $this->getContentData($url);
        $this->title = $this->content_title;
        $this->description = $this->content_desc;

        require_once "app/views/content.php";
    }
}