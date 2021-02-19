<?php
require 'head.php';
require 'header.php';
$title = "Home";
?>
    <section class="container truck-section" id="truck">
        <div class="truck-img">
            <img src="img/pexels-elisa-guarneros-1550049 (1).jpg" alt="photo camion">
        </div>
        <div class="concept">
            <h2 class="home-title">Le concept</h2>
            <p class="section-p">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation “</p>
            <p class="section-p">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>

    <section class="container products-section">
        <h2 class="home-title" id="produits">Nos produits</h2>
        <div class="products-group">
            <div class="products-container">
                <h4 class="products-group-title">Les crèmes glacées</h4>
                <p class="section-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>    
            </div>
            <img class="products-group-img" src="img/icenanas_crop.jpg" alt="photo de crème glacées">
        </div>
        <div class="products-group">
            <div class="products-container">
                <h4 class="products-group-title" id="gelattiT">Les gelatti</h4>
                <p class="section-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>    
            </div>
            <img class="products-group-img" id="gelattiI" src="img/pexels-george-stremplis-1006190 (1).jpg" alt="photo de gelatto">
        </div>
        <div class="products-group">
            <div class="products-container">
                <h4 class="products-group-title" id="veganT">Les vegans</h4>
                <p class="section-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <img src="img/veganCrop.jpg" id="veganI" alt="photo de glace vegan" class="products-group-img">
        </div>
    </section>
</body>

<?php require 'footer.php' ?>
</html>
