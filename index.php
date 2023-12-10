<?php
define('BASE_URL', '/site/');


if(empty($_GET["address"])):
    $_GET["address"] = "home";
endif;


$address = explode("/", mb_strtolower(trim($_GET["address"], "/")));



switch ($address[0]):
    case "home":
        require_once "app/controllers/HomeController.php";
        $homeController = new HomeController();
        $homeController->index();
        break;

    case "about":
        require_once "app/controllers/AboutController.php";
        $aboutController = new AboutController();
        $aboutController->index();
        break;

    case "contact":
        require_once "app/controllers/ContactController.php";
        $contactController = new ContactController();
        $contactController->index();
        break;

    case "contents":
        require_once "app/controllers/ContentsController.php";
        $contentsController = new ContentsController();
        $contentsController->index();
endswitch;