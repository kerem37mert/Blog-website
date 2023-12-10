<?php

require_once "Database.php";

class Model extends Database
{
    public function webInfoData()
    {
        return $this->getRow("SELECT * FROM webinfo where webinfo_id=?", [1]);
    }
}