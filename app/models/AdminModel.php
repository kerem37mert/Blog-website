<?php

require_once "libs/Database.php";

class AdminModel extends Database
{
    public function userCount($email, $password)
    {
        return $this->getRowCount("SELECT admin_email FROM admin where admin_email=? and admin_password=?", [$email, $password]);
    }

    public function addContent($title, $desc, $keywords, $author, $maincontent, $url)
    {
        $this->insert("INSERT INTO contents (content_title, content_desc, content_keywords, content_author, content_maincontent, content_url) VALUES(?,?,?,?,?,?)",
        [$title, $desc, $keywords, $author, $maincontent, $url]);
    }

    public function webInfoData()
    {
        return $this->getRow("SELECT * FROM webinfo where webinfo_id=?",[1]);
    }

    public function updateSettings($title, $desc, $keywords, $owner, $sitename, $github, $linkedin, $x, $instagram)
    {
        $this->update("UPDATE webinfo SET webinfo_title=?, webinfo_description=?, webinfo_keywords=?, 
                   webinfo_owner=?, webinfo_sitename=?, webinfo_github=?, webinfo_linkedin=?,
                   webinfo_x=?, webinfo_instagram=?",
        [$title, $desc, $keywords, $owner, $sitename, $github, $linkedin, $x, $instagram]);
    }
}