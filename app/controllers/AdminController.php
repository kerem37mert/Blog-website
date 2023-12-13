<?php

require_once "app/models/AdminModel.php";
require_once "services/cleanText.php";

class AdminController
{
    public $adminModel;

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



    // Controls //
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
}