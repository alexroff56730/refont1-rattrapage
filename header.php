<?php
    $path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $current=basename($path);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Kercode-Basketball</title>
    </head>
    <body>
        <header id="banner">
            <!--    Made by Erik Terwan    -->
            <!--   24th of November 2015   -->
            <!--        MIT License        -->
            <nav role="navigation">
                <div id="menuToggle">
                    <!--
                    A fake / hidden checkbox is used as click reciever,
                    so you can use the :checked selector on it.
                    -->
                    <input type="checkbox" />
    
                    <!--
                    Some spans to act as a hamburger.
    
                    They are acting like a real hamburger,
                    not that McDonalds stuff.
                    -->
                    <span></span>
                    <span></span>
                    <span></span>
    
                    <!--
                    Too bad the menu has to be inside of the button
                    but hey, it's pure CSS magic.
                    -->
                    <ul id="menu">
                        <a href="index.php"><li>acceuil</li></a>
                        <a href="cours.php"><li>cours</li></a>
                        <a href="#"><li>Contact</li></a>
                    </ul>
                </div>
            </nav>
            <figure id="logo">
                <img src="images/favicon.ico" alt="logo kercode basketball">
            </figure>
        </header>