<?php

require_once "libs/Database.php";

class AdminModel extends Database
{
    public function userCount($email, $password)
    {
        return $this->getRowCount("SELECT admin_email FROM admin where admin_email=? and admin_password=?", [$email, $password]);
    }

    public function webInfoData()
    {
        return $this->getRow("SELECT * FROM webinfo where webinfo_id=?",[1]);
    }

    public function contentData($url)
    {
        return $this->getRow("SELECT * FROM contents where content_url=?", [$url]);
    }

    public function lastContent()
    {
        return $this->getRow("SELECT content_url FROM contents order by content_date DESC");
    }

    public function bigContents()
    {
        return $this->getRows("SELECT * FROM highlights");
    }

    public function addContent($title, $desc, $keywords, $author, $maincontent, $url)
    {
        $this->insert("INSERT INTO contents (content_title, content_desc, content_keywords, content_author, content_maincontent, content_url) VALUES(?,?,?,?,?,?)",
        [$title, $desc, $keywords, $author, $maincontent, $url]);
    }

    public function updateSettings($title, $desc, $keywords, $owner, $sitename, $github, $linkedin, $x, $instagram)
    {
        $this->update("UPDATE webinfo SET webinfo_title=?, webinfo_description=?, webinfo_keywords=?, 
                   webinfo_owner=?, webinfo_sitename=?, webinfo_github=?, webinfo_linkedin=?,
                   webinfo_x=?, webinfo_instagram=?",
        [$title, $desc, $keywords, $owner, $sitename, $github, $linkedin, $x, $instagram]);
    }

    public function updateContent($title, $desc, $keywords, $author, $maincontent,$url)
    {
        $this->update("UPDATE contents SET content_title=?, content_desc=?, content_keywords=?,
                    content_author=?, content_maincontent=? where content_url=?", [$title, $desc, $keywords, $author, $maincontent, $url]);
    }
    public function updatehighlights($name, $url, $id)
    {
        $this->update("UPDATE highlights SET content_name=?, content_url=? where content_id=?",
            [$name, $url, $id]);
    }

    public function deleteMessage($id)
    {
        $this->delete("DELETE FROM contact where contact_id=?", [$id]);
    }

    public function deleteContent($url)
    {
        $this->delete("DELETE FROM contents where content_url=?", [$url]);
    }


    public function contentsData()
    {
        return $this->getRows("SELECT content_title, content_desc, content_url FROM contents order by content_date DESC");
    }

    public function messagesData()
    {
        return $this->getRows("SELECT contact_id, contact_subject, contact_date FROM contact order by contact_date DESC");
    }

    public function messageData($id)
    {
        return $this->getRow("SELECT * FROM contact where contact_id=?", [$id]);
    }
}