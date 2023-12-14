<?php

require_once "libs/Database.php";

class HomeModel extends Database
{
    public function contentsData()
    {
        return $this->getRows("SELECT content_title, content_desc, content_url FROM  contents order by content_date DESC LIMIT 5");
    }

    public function highlightsData()
    {
        return $this->getRows("SELECT * FROM highlights LIMIT 3");
    }
}
