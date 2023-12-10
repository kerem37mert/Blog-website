<?php

require_once "libs/Database.php";

class ContactModel extends Database
{
    public function insertMessage($subject, $name, $message, $email)
    {
        $this->insert("INSERT INTO contact (contact_subject, contact_name, contact_message, contact_email) VALUES(?,?,?,?)", [$subject, $name, $message, $email]);
    }
}