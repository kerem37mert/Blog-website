<?php

require_once "libs/Controller.php";
require_once "app/models/ContactModel.php";
require_once "services/cleanText.php";

class ContactController extends Controller
{
    private $contactModel;

    public function index()
    {
        $this->title = "İletişim | ". $this->title;

        require_once "app/views/contact.php";
    }

    public function messageControl($subj, $name, $msg, $mail) //Message COntrol
    {
        if(isset($subj) && isset($name) && isset($msg) && isset($mail)):
            if((strlen($subj) > 5 && strlen($subj) < 100) && (strlen($name) > 5 && strlen($name) < 50) && (strlen($msg) > 20 && strlen($msg) < 500) && (strlen($mail) > 5 && strlen($mail) < 50)):
                return true;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }

    public function addMessage()
    {
        $subject = cleanText($_POST["subject"]);
        $name = cleanText($_POST["name"]);
        $message = cleanText($_POST["message"]);
        $email = cleanText($_POST["email"]);

        if($this->messageControl($subject, $name, $message, $email)):
            $this->contactModel = new ContactModel();
            $this->contactModel->insertMessage($subject, $name, $message, $email);
            return "success";
        else:
            return "false";
        endif;
    }
}