<?php 
require 'head.html';
?>
<footer class="footer">
    <div class="container-footer">
        <a class="top" href="#navlist">
            <img src="img/arrow.svg" alt="Flèche haut de page" width="21px" height="21px">
            <p>Haut de page</p>
        </a>
    </div>
    <div class="footer-newsletter">
        <form action="/newsletter.php" method="post" class="footer-form">
            <label for="newsletter-footer" class="label footer-label">Newsletter :</label>
            <input name="email" type="email" placeholder="Votre email" class="form-control-footer" id="footer-input">
            <button type="submit" id="footer-button">S'inscrire</button>
        </form>
    </div>
    <div class="socials">
        <a href="#"><img src="img/insta.svg" alt="Instagram" width="21px" height="21px"></a>
        <a href="#"><img src="img/fb.svg" alt="Facebook"></a>
        <a href="#"><img src="img/YT.svg" alt="Youtube"></a>
        <a href="#"><img src="img/twitter.svg" alt="Twitter"></a>
    </div>
    <div class="others">
        <a href="#"><p>Crédits</p></a>
        <p>Design et développement : Margaux Lachèze</p>
    </div>
</footer>
</html>
