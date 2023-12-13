<?php

require_once "libs/Database.php";

class AdminModel extends Database
{
    public function userCount($email, $password)
    {
        return $this->getRowCount("SELECT admin_email FROM admin where admin_email=? and admin_password=?", [$email, $password]);
    }
}