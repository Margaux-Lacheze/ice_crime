<?php
require 'head.php';
?>
<header class="header">
    <nav class="navbar">
        <ul class="nav-list" id="navlist">
            <div class="nav-a">
                <a href="home.php" class="nav-items nav-underline">Home</a>
                <a href="diy.php" class="nav-items nav-underline">DIY</a>
                <a href="actus.php" class="nav-items nav-underline">Actus</a>
                <a href="contact.php" class="nav-items nav-underline">Contact</a>
            </div>
            <div class="header-svg">
                <a href="account.php" class="nav-items"><img src="/img/account.svg" alt="mon compte" width="40px" height="40px"></a>
                <a href="panier.php" class="nav-items"><img src="/img/basket.svg" alt="panier" width="40px" height="40px"></a>
            </div>
        </ul>
    </nav>
    <div class="baseline">
        <h1 class="header-title">Ice Crime</h1>
        <span class="header-span"><?= $title ?></span>
    </div>
</header>