<?php 
require 'head.html';
$error = null;
$success = null;
$email = null;

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = "Votre email a bien été enregistré !";
        $email = null;
    }else{
        $error = "Email invalide";
    }
}

require 'header.php'; ?>

<h2 class="section-title" id="news-title">S'inscrire à la newsletter</h2>
<p class="section-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, distinctio enim harum eligendi itaque a illo numquam tempora odit reiciendis ducimus quo error atque? Fugiat tempore et possimus veritatis ex.</p>

<?php if($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>

<?php if($success): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif; ?>

<div class="news">
    <form action="/newsletter.php" method="post" class="news-form">
        <input type="email" name="email" placeholder="Entrez votre email" required class="form-control form-news" value="<?= htmlentities($email) ?>">
        <button type="submit" class="button button-news">Envoyer</button>
    </form>
</div>

<?php require 'footer.php' ?>