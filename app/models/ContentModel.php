<?php

class ContentModel extends Database
{
    public function contentData($url)
    {
        return $this->getRow("SELECT * FROM contents where content_url=?", [$url]);
    }
}