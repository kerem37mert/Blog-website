<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönetim Sayfası</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/admin/css/style.css">
</head>
<body>
<div class="container">
    <aside>
        <div class="aside-top">
            <h1>Keremmert.app</h1>
        </div>
        <div class="aside-menu">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>admin/home">Ana Sayfa</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>admin/newcontent">Yeni Yazı</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL ?>admin/contents">Yazılarım</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>admin/settings">Ayarlar</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>">Siteyi Görüntüle</a>
                </li>
            </ul>
        </div>
    </aside>
    <main>
        <nav>
            <img class="open-button" src="<?php echo BASE_URL; ?>public/admin/svg/hamburger-menu-svgrepo-com.svg" alt="">
            <ul>
                <!--
                <li>
                    <a href="">Profil</a>
                </li>
                -->
                <li>
                    <a href="<?php echo BASE_URL; ?>admin/logout">Çıkış Yap</a>
                </li>
            </ul>
        </nav>