<?php

require_once "app/models/AdminModel.php";
require_once "services/cleanText.php";

class AdminController
{
    public $adminModel;

    public $settingsData;


    public function __construct()
    {
        session_start();
        $this->adminModel = new AdminModel();
    }

    public function sessionControl()
    {
        if(isset($_SESSION["admin"])):
            return true;
        else:
            return false;
        endif;
    }

    public function login()
    {
        require_once "app/views/admin/login.php";
    }

    public function logout()
    {
        session_destroy();
        header("location:".BASE_URL."admin");
        exit;
    }

    public function home()
    {
        require_once "app/views/admin/home.php";
    }

    public function newContent()
    {
        require_once "app/views/admin/newContent.php";
    }

    public function settings()
    {
        $this->getWebInfoData();
        require_once("app/views/admin/settings.php");
    }


    // OPERATAIONS //
    public function loginControl()
    {
        $email = cleanText($_POST["email"]);
        $password = md5(cleanText($_POST["password"]));

        if($this->adminModel->userCount($email, $password)):
            $_SESSION["admin"] = $email;
        endif;

        header("location:".BASE_URL."admin");
        exit;
    }

    public function addContent()
    {
        $title = cleanText($_POST["content_title"]);
        $desc = cleanText($_POST["content_desc"]);
        $keywords = cleanText($_POST["content_keywords"]);
        $author = cleanText($_POST["content_author"]);
        $maincontent = $_POST["content_maincontent"];
        $url = cleanText($_POST["content_url"]);

        $this->adminModel->addContent($title, $desc, $keywords, $author, $maincontent, $url);
        header("location:".BASE_URL."admin/newcontent?status=true");
        exit;
    }

    public function getWebInfoData()
    {
        $this->settingsData = $this->adminModel->webInfoData();
    }

    public function updateSettings()
    {
        $title = cleanText($_POST["webinfo_title"]);
        $desc = cleanText($_POST["webinfo_description"]);
        $keywords = cleanText($_POST["webinfo_keywords"]);
        $owner = cleanText($_POST["webinfo_owner"]);
        $sitename = cleanText($_POST["webinfo_sitename"]);
        $github = cleanText($_POST["webinfo_github"]);
        $linkedin = cleanText($_POST["webinfo_linkedin"]);
        $x = cleanText($_POST["webinfo_x"]);
        $instagram = cleanText($_POST["webinfo_instagram"]);

        if($_FILES["webinfo_favicon"]):
            $status = move_uploaded_file($_FILES["webinfo_favicon"]["tmp_name"],"public/images/favicon.png");
        endif;

        $this->adminModel->updateSettings($title, $desc, $keywords, $owner, $sitename, $github,
        $linkedin, $x, $instagram);
        header("location:".BASE_URL."admin/settings?status=true");
        exit;
    }
}