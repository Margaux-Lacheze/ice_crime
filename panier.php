<?php
require 'head.php';
require 'header.php';
$title = "Votre panier";

$prixParfums = [
    1 => 2,
    2 => 2.5,
    3 => 3,
    4 => 4.5
];

$prixContenants = [
    'cornet' => 0.5,
    'coupelle' => 3,
    'pot' => 1,
    'bac' => 3
];

$count = 0;
$array_parfums = [];

if(isset($_POST['parfums1']))  {
    if($_POST['parfums1'] !== "" ){
        $array_parfums[] = $_POST['parfums1'];
        $count += 1;
    };
};
if(isset($_POST['parfums2'])) {
    if($_POST['parfums2'] !== "") {
        $array_parfums[] = $_POST['parfums2'];
        $count += 1;
    };
};
if(isset($_POST['parfums3'])) {
    if($_POST['parfums3'] !== "") {
        $array_parfums[] = $_POST['parfums3'];
        $count += 1;
    };
};
if(isset($_POST['parfums4'])) {
    if($_POST['parfums4'] !== "") {
        $array_parfums[] = $_POST['parfums4'];
        $count += 1;
    };
};

$totalParfums = $prixParfums[$count];

$totalSupplements = 0;
$prixSupplements = [
    'pepites' => 1,
    'chantilly' => 2.5,
    'amandes' => 0.25,
    'vermicelle' => 0.5,
    'fruits' => 2,
    'coulischocolat' => 1.5,
    'coulisframboise' => 1.5
];

$array_supplements = [];

if(isset($_POST['pepites'])){
    $totalSupplements += $prixSupplements['pepites'];
    $array_supplements[] = 'Pépites de chocolat';
};
if(isset($_POST['chantilly'])){
    $totalSupplements += $prixSupplements['chantilly'];
    $array_supplements[] = 'Chantilly maison';
};
if(isset($_POST['amandes'])){
    $totalSupplements += $prixSupplements['amandes'];
    $array_supplements[] = 'Amandes effilées';
};
if(isset($_POST['vermicelle'])){
    $totalSupplements += $prixSupplements['vermicelle'];
    $array_supplements[] = 'Vermicelle';
};
if(isset($_POST['fruits'])){
    $totalSupplements += $prixSupplements['fruits'];
    $array_supplements[] = 'Morceaux de fruits';
};
if(isset($_POST['coulischocolat'])){
    $totalSupplements += $prixSupplements['coulischocolat'];
    $ingredients[] = 'coulischocolat';
    $array_supplements[] = 'Coulis au chocolat';
};
if(isset($_POST['coulisframboise'])){
    $totalSupplements += $prixSupplements['coulisframboise'];
    $array_supplements[] = 'Coulis à la framboise';
};

$contenant_policed = "";
if (isset($_POST['contenant'])){
    $contenant = $_POST['contenant'];
    switch($contenant){
        case "cornet" :
            $contenant_policed = "Cornet";
        break;
        case "coupelle" :
            $contenant_policed = "Coupelle";
        break;
        case "pot" :
            $contenant_policed = "Pot";
        break;
        case "bac" :
            $contenant_policed ="Bac";
        break;
        default :
            $contenant_policed = "";
    };
    
};

$totalContenants = $prixContenants[$contenant];

$total = $totalParfums + $totalSupplements + $totalContenants;

$ingredients = [$array_parfums, $array_supplements, $contenant_policed];
?>

<div class="shopping-card-container">
    <div class="shopping-card-list">
    <?php if(!empty($ingredients[0])): ?>
        <h2 class="shopping-title">Votre glace :</h2>
        <ul>
            <li id="perfumes-list">
                <h4 class="list-subtitle"><?php if(sizeof($array_parfums) > 1): ?>Vos parfums <?php else: ?>Votre parfum<?php endif;?></h4>
                <ul class="list-item">
                    <li>
                        <?php foreach($array_parfums as $k => $parfum): ?>
                            <?php if(sizeof($array_parfums) > 1): ?><em class="list-item-em">Boule n°<?= $k + 1 ?> : </em>
                            <?php else: ?> 
                            <?php endif;?>
                        <ul>
                            <li class="shopping-li"><?= $parfum ?></li>
                        </ul>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </li>
            <li id="supplements-list">
                <?php if(!empty($array_supplements)): ?>
                <h4 class="list-subtitle"><?php if(sizeof($array_supplements) >1):?>Vos suppléments<?php else: ?>Votre supplément<?php endif; ?></h4>
                <?php foreach($array_supplements as $supplement): ?>
                <ul class="list-item">
                    <li class="shopping-li"><?= $supplement ?></li>
                </ul>
                <?php endforeach; ?>
                <?php endif; ?>
            </li>
            <li id="contenants-list">
                <?php if(!empty($contenant_policed)): ?>
                <h4 class="list-subtitle">Votre contenant</h4>
                <ul class="list-item">
                    <li class="shopping-li"><?= $contenant_policed ?></li>
                </ul>
                <?php endif; ?>
            </li>
        </ul>
    <?php endif; ?>
    </div>

    <div class="shopping-card-total">
        <?php if(isset($total) && $total > 0): ?>
        <strong class="shopping-total">Total : <?= $total ?>€</strong>
        <button class="shopping-button">Paiement</button>
        <?php else: ?>
            <div class="alert">
                <p>Votre panier est vide</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require 'footer.php' ?>