<?php
require 'head.html';
?>
<body>
    <header class="header">
    <nav class="navbar">
        <ul class="nav-list" id="navlist">
            <a href="home.php" class="nav-items">Home</a>
            <a href="diy.php" class="nav-items">DIY</a>
            <a href="actus.php" class="nav-items">Actus</a>
            <a href="contact.php" class="nav-items">Contact</a>
            <a href="panier.php" class="nav-items"><img src="/img/basket.svg" alt="panier" width="40px" height="40px"></a>
        </ul>
        </nav>
        <div class="baseline">
            <h1>Ice Crime</h1>
            <span><?= $title ?></span>
        </div>
    </header>