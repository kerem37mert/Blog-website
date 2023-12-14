<?php

require_once "app/models/AdminModel.php";
require_once "services/cleanText.php";

class AdminController
{
    public $adminModel;

    public $settingsData;
    public $contentData;
    public $lastContentUrl;
    public $bigContentsData;
    public $contentsData;
    public $messagesData;
    public $messageData;


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
        $this->getLastContent();
        $this->getBigContents();
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

    public function content($contentUrl)
    {
        $this->getContentData($contentUrl);
        if(empty($this->contentData)):
            header("Location:".BASE_URL."404");
            exit;
        else:
            require_once "app/views/admin/content.php";
        endif;
    }

    public function contents()
    {
        $this->getContentsData();
        require_once "app/views/admin/contents.php";
    }

    public function messages()
    {
        $this->getMessagesData();
        require_once "app/views/admin/messages.php";
    }

    public function message($message_id)
    {
        $this->getMessageData($message_id);
        if(empty($this->messageData)):
            header("Location:".BASE_URL."404");
            exit;
        else:
            require_once "app/views/admin/message.php";
        endif;
    }


    // OPERATAIONS //
    public function getWebInfoData()
    {
        $this->settingsData = $this->adminModel->webInfoData();
    }

    public function getContentData($url)
    {
        $this->contentData = $this->adminModel->contentData($url);
    }

    public function getLastContent()
    {
        $this->lastContentUrl = $this->adminModel->lastContent()["content_url"];
    }

    public function getBigContents()
    {
        $this->bigContentsData = $this->adminModel->bigContents();
    }

    public function getContentsData()
    {
        $this->contentsData = $this->adminModel->contentsData();
    }

    public function getMessagesData()
    {
        $this->messagesData = $this->adminModel->messagesData();
    }

    public function getMessageData($id)
    {
        $this->messageData = $this->adminModel->messageData($id);
    }


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
            move_uploaded_file($_FILES["webinfo_favicon"]["tmp_name"],"public/images/favicon.png");
        endif;

        $this->adminModel->updateSettings($title, $desc, $keywords, $owner, $sitename, $github,
        $linkedin, $x, $instagram);
        header("location:".BASE_URL."admin/settings?status=true");
        exit;
    }

    public function updateContent()
    {
        $title = cleanText($_POST["content_title"]);
        $desc = cleanText( $_POST["content_desc"]);
        $maincontent = $_POST["content_maincontent"];
        $keywords = cleanText($_POST["content_keywords"]);
        $author = cleanText($_POST["content_author"]);

        $url = $_POST["content_url"];

        $this->adminModel->updateContent($title, $desc, $keywords, $author, $maincontent, $url);
        header("location:".BASE_URL."admin/content/".$url."?status=true");
        exit;
    }

    public function updatehighlights()
    {
        $name = cleanText($_POST["content_name"]);
        $url = cleanText($_POST["content_url"]);
        $id = cleanText($_POST["content_id"]);

        if($_FILES["content_img"]):
            move_uploaded_file($_FILES["content_img"]["tmp_name"],"public/images/highlights/".$id.".png");
        endif;

        $this->adminModel->updatehighlights($name, $url, $id);
        header("location:".BASE_URL."admin/home?status=true");
        exit;
    }

    public function deleteMessage()
    {
        $message_id = cleanText($_GET["message_id"]);

        $this->adminModel->deleteMessage($message_id);
        header("location:".BASE_URL."admin/messages?status=true");
        exit;
    }
}