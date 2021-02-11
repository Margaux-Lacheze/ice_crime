<?php
require 'head.html';
$title = "Actualités";

require_once 'header.php';
?>

<section class="newsletter-section">
    <h2 class="section-title" id="newsletter-title">La newsletter : pour ne rien rater</h2>
    <div class="newsletter-form-container">
        <form action="/newsletter.php" method="post" class="form-newsletter">
            <input type="email" name="email" placeholder="email@exemple.com" class="form-control" required>
            <button class="button-newsletter" type="submit">Envoyer</button>
        </form>
    </div>
</section>

<section class="whatsup-section">
    <h2 class="section-title" id="whatsup-title">What's up Ice Crime ?</h2>
    <div class="whatsup-blog-container">
        <div class="whatsup-container">
            <h3 class="whatsup-subtitle">News Title</h3>
            <p class="whatsup-date">3/01/2021</p>
            <div class="whatsup-text-container">
                <p class="section-p whatsup-p">Quae tenus contumacem nos ignorare postulat quae inusitato haec quodam nimirum quid rerum tumore et dissimulantem ignorare quod nimirum praefectum contumacem dissimulantem Augustae recalcitrantes quod Augustae ignorare ignorare rebellis quae.</p>
                <div class="whatsup-img-container">
                    <img src="img/chien.jpg" alt="chien qui lèche une glace" class="whatsup-image">
                </div>
            </div>
        </div>
        <div class="whatsup-container">
            <h3 class="whatsup-subtitle">News Title</h3>
            <p class="whatsup-date">12/11/2020</p>
            <div class="whatsup-text-container">
                <p class="section-p whatsup-p">Supercilia itaque Rheni inpossibile navium ad Romani nive est ubi supercilia multitudine Alamanna est multis nive supercilia quid Rheni vi convolantibus magnis est prope convolantibus multitudine undique nimia ventum difficultatibus ventum Alamanna videretur convolantibus pontem multis ambigebat cum capesseret ubi ritu cum vi id inpossibile callibus grandinis Romani et id.</p>
                <div class="whatsup-img-container">
                    <img src="img/truck2.jpg" alt="truck tropical" class="whatsup-image">
                </div>
            </div>
        </div>
        <div class="whatsup-container">
            <h3 class="whatsup-subtitle">News Title</h3>
            <p class="whatsup-date">06/10/2020</p>
            <div class="whatsup-text-container">
                <p class="section-p whatsup-p">Contumaciter auferri leviter et solo ut in annonas et ultimum admissusque proficiscere et eius ut nec Caesar saepius contumaciter est praegressa eius prope et in inquit nulla ad prope tuas.</p>
                <div class="whatsup-img-container">
                    <img src="img/2ices.jpg" alt="deux glaces" class="whatsup-image">
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'footer.php' ?>