<?php

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="public/css/style.css" type="text/css"/>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <a id="logo">Thanh Lam</a>
        <div id="user-login">
            <?php
            //echo info_user('fullname');
            ?>
            <p>Xin chao <strong>
                    <?php
                    if (is_login()) echo info_user('fullname');
                    ?>
                </strong>(<a href="?page=logout">Exit</a>)</p>
        </div>
        <ul id="main-menu">
            <li><a href="?page=home">Index</a></li>
            <li><a href="?page=about">About</a></li>
            <li><a href="?page=news">News</a></li>
            <li><a href="?page=product">Product</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </div>
