<?php

require_once "libs/Controller.php";

class ContactController extends Controller
{
    public function index()
    {
        $this->title = "İletişim | ". $this->title;

        require_once "app/views/contact.php";
    }
}