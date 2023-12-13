<?php
define('BASE_URL', '/site/');


if(empty($_GET["address"])):
    $_GET["address"] = "home";
endif;

$address = explode("/", mb_strtolower(trim($_GET["address"], "/")));



switch ($address[0]):
    case "home":
        if(isset($address[1])):
            header("location:".BASE_URL."404");
            exit;
        endif;
        require_once "app/controllers/HomeController.php";
        $homeController = new HomeController();
        $homeController->index();
        break;

    case "about":
        if(isset($address[1])):
            header("location:".BASE_URL."404");
            exit;
        endif;
        require_once "app/controllers/AboutController.php";
        $aboutController = new AboutController();
        $aboutController->index();
        break;

    case "contact":
        if(isset($address[1])):
            header("location:".BASE_URL."404");
            exit;
        endif;
        require_once "app/controllers/ContactController.php";
        $contactController = new ContactController();
        $contactController->index();
        break;

    case "contents":
        if(isset($address[1])):
            header("location:".BASE_URL."404");
            exit;
        endif;
        require_once "app/controllers/ContentsController.php";
        $contentsController = new ContentsController();
        $contentsController->index();
        break;

    case "content":
        if(isset($address[2])):
            header("location:".BASE_URL."404");
            exit;
        endif;
        require_once "app/controllers/ContentController.php";
        $contentController = new ContentController();
        $contentController->index($address[1]);
        break;


    //OPERATIONS
    case "operation":
        //Mesaj Göndeme
        if($address[1] == "sendmessage"):
            require_once "app/controllers/ContactController.php";
            $contactController = new ContactController();
            $status = $contactController->addMessage();
            header("location:".BASE_URL."contact?insert=$status");
            exit;

        //İçerik Arama
        elseif($address[1] == "search"):
            require_once "libs/Controller.php";
            $controller = new Controller();
            $controller->getSearchContents();
        else:
            header("location:".BASE_URL."404");
            exit;
        endif;
        break;
    //OPERATIONS


    // ADMIN START //
    case "admin":
        require_once "app/controllers/AdminController.php";
        $adminController = new AdminController();

        if($adminController->sessionControl()):
            if(empty($address[1]) || $address[1] == "home"):
                $adminController->home();
            else:
                switch($address[1]):
                    case "logout":
                        $adminController->logout();
                        break;

                    case "newcontent":
                        $adminController->newContent();
                        break;

                    default:
                        header("location:".BASE_URL."404");
                        exit;
                endswitch;
            endif;
        else:
            $adminController->login();
        endif;
        break;


    case "adminoperation":
        require_once "app/controllers/AdminController.php";
        $adminController = new AdminController();

        switch($address[1]):
            case "logincontrol":
                $adminController->loginControl();
                break;
        endswitch;
        break;
    // ADMIN END //

    default:
        require_once "app/controllers/PageNotFoundController.php";
        $pageNotFoundController = new PageNotFoundController();
        $pageNotFoundController->index();
endswitch;