<?php

require_once "Database.php";

class Model extends Database
{
    public function webInfoData()
    {
        return $this->getRow("SELECT * FROM webinfo where webinfo_id=?", [1]);
    }

    public function randomContentsData()
    {
        return $this->getRows("SELECT content_title, content_url FROM contents order by rand() limit 5");
    }

    public function lastContentsData()
    {
        return $this->getRows("SELECT content_title, content_url FROM contents order by content_date DESC limit 5");
    }
}