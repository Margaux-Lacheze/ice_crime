<?php

function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}


function html_creneaux ($creneaux) {
    $phrases = [];
    if (empty($creneaux)){
        return 'Fermé';
    }
    foreach ($creneaux as $creneau) {
        $phrases[] = "de {$creneau[0]}h à {$creneau[1]}h";
    }
    return "Ouvert " . implode(" et ", $phrases);
}

function check_ouverture (int $heure, array $creneaux): bool {
    foreach ($creneaux as $creneau){
        $debut = $creneau[0];
        $fin = $creneau[1];
        if($heure >= $debut && $heure < $fin){
            return true;
        }
    }
    return false;
}

function couleur_jour ($jourAffiche, $jourCourant, $statutOuverture){
    $class = "";
    if($jourAffiche === $jourCourant){
        if($statutOuverture){
            $class = "open-p";
        }else{
            $class = "closed-p";
        }
    }
    echo $class;
}