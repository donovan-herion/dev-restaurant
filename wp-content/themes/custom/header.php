<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php get_template_directory_uri() . "chemin logo ici" ?>">

    <?php
    wp_head();
    ?>
</head>

<body>
    <nav class="main-nav">
        <div>
            <p class="logo"><a href="<?= get_bloginfo('url'); ?>"><?= get_bloginfo('name'); ?></a></p>
        </div>
        <?php

        wp_nav_menu([
            "menu" => "primary",
            "container" => "",
            "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
            "theme_location" => "primary"
        ])

        ?>
    </nav>