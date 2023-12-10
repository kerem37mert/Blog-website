<?php

require_once "libs/Database.php";

class AboutModel extends Database
{
    public function AboutData()
    {
        return $this->getRow("SELECT * FROM about where about_id=?", [1]);
    }
}