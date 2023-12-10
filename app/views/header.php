<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
    <meta name="description" content="<?php echo $this->description; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/style.css">
</head>
<body>
    <header>
        <div class="header-title">
            <h1><?php echo $this->siteName; ?></h1>
        </div>
        <nav>
            <img src="<?php echo BASE_URL ?>public/svg/hamburger-menu-svgrepo-com.svg" alt="Menu Open" id="openButton">
            <img src="<?php echo BASE_URL ?>public/svg/close-md-svgrepo-com.svg" alt="closeButton" id="closeButton">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL; ?>">Ana Sayfa</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>contents">İçerikler</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>about">Hakkımda</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>contact">İletişim</a>
                </li>
            </ul>
        </nav>
    </header>