<?php
require 'head.php';
$title = 'Nous contacter';
require_once 'data/horaires.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
$jourCourant = (int)date('N')-1;
$heureCourante = (int)date('G');
$creneauxHoraires = CRENEAUX[$jourCourant];
$ouvert = check_ouverture($heureCourante, $creneauxHoraires);
$contactArray = [];
$success = null;
$fil = null;

if(!empty($_POST['lastname'] && $_POST['firstname'] && $_POST['mail'] && $_POST['text'])){
    $nom = $_POST['lastname'];
    $prenom = $_POST['firstname'];
    $message = $_POST['text'];
    if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        $mail = $_POST['mail'];
        array_push($contactArray, $nom, $prenom, $mail, $message);
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'messages' . DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, serialize($contactArray) . PHP_EOL, FILE_APPEND);
        $success = "Votre message a bien été pris en compte";
    }
        $error = "Veuillez remplir tous les champs du formulaire";
}

require 'header.php';
?>


<section class="horaires-section">
    <?php if($fail): ?>
        <div class="alert alert-danger">
            <?= $fail ?>
        </div>
    <?php endif; ?>

    <?php if($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif; ?>
    <h2 class="section-title" id="horaires-title">Nos horaires d'ouverture</h2>
    <div class="horaires">
        <?php if($ouvert): ?>
            <div class="status-container status-open">
                <p class="alert-p">Nous sommes ouverts !</p>
            </div>
        <?php else: ?>
            <div class="status-container status-closed">
                <p class="alert-p">Oups ! Nous sommes fermés</p>
            </div>
        <?php endif ?>

        <div class="horaires-container">
            <ul>
                <?php foreach (JOURS as $k => $jour): ?>
                    <li class="<?php couleur_jour($k, $jourCourant, $ouvert) ?>">
                    <strong><?=$jour?></strong>:
                    <?= html_creneaux(CRENEAUX[$k])?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</section>

<section class="infos-section">
    <h2 class="section-title" id="infos-title">Nos informations</h2>
    <div class="infos-container">
        <p><strong>Ice Crime</strong></p>
        <p><strong>Adresse</strong> : 111 rue des développeurs en apprentissage</p>
        <p><strong>Téléphone</strong> : +33X XX XX XX XX</p>
    </div>
</section>

<section class="contact-section">
    <h2 class="section-title" id="contact-title">Nous écrire</h2>
    <div>
        <form action="/contact.php" method="POST">
        <div class="contact-form-container">
            <div class="contact-form-div">
                <label for="lastname" class="contact-form-label">Votre nom :</label>
                <input type="text" name="lastname" required class="form-control contact-form">
            </div>
            <div class="contact-form-div">
                <label for="firstname" class="contact-form-label">Votre prénom:</label>
                <input type="text" name="firstname" required class="form-control contact-form">
            </div>
            <div class="contact-form-div">
                <label for="mail" class="contact-form-label">Entrez votre email :</label>
                <input type="email" name="mail" required class="form-control contact-form">
            </div>
            <div class="contact-form-div">
                <label for="text" class="contact-form-label">Votre message :</label>
                <textarea name="text" id="" cols="30" rows="10" class="form-control contact-textarea"></textarea>
            </div>
            <button type="submit" class="button-contact">Envoyer</button>
        </div>
        </form>
    </div>
</section>

<?php require 'footer.php' ?>
