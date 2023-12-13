<?php

require_once "libs/Database.php";

class ContentsModel extends Database
{
    public function contentsData($start, $limit)
    {
        return $this->getRows("SELECT content_title, content_desc, content_url FROM contents order by content_date DESC limit $start, $limit");
    }

    public function contentCount()
    {
        return $this->getRowCount("SELECT content_id FROM contents");
    }
}