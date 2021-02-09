<?php
require 'head.html';
require_once 'functions.php';
$title = "Do It Yourself";

require_once 'header.php';
?>

<section class="explications">
    <h2 class="section-title" id="expT">
        Comment créer ma glace ?
    </h2>
    <p class="section-p">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
</section>

<form action="panier.php" method="post" class="form">
    <div class="etape etape-1">
        <h3 class="form-title">Etape 1 : Choisir les parfums <span class="mini">-minimum 1</span></h3>
        <select class="select-parfums" name="parfums1" id="parfums1" required>
            <option value="" class="option-placeholder">Parfum n°1</option>
            <option value="Fraise">Fraise</option>
            <option value="Vanille">Vanille</option>
            <option value="Chocolat">Chocolat</option>
            <option value="Menthe">Menthe</option>
            <option value="Pistache">Pistache</option>
            <option value="Noix de coco">Noix de coco</option>
            <option value="Thé matcha">Thé vert matcha</option>
        </select>
        <select class="select-parfums" name="parfums2" id="parfums2">
            <option value="" class="option-placeholder">Parfum n°2</option>
            <option value="Fraise">Fraise</option>
            <option value="Vanille">Vanille</option>
            <option value="Chocolat">Chocolat</option>
            <option value="Menthe">Menthe</option>
            <option value="Pistache">Pistache</option>
            <option value="Noix de coco">Noix de coco</option>
            <option value="Thé matcha">Thé vert matcha</option>
        </select>
        <select class="select-parfums" name="parfums3" id="parfums3">
            <option value="" class="option-placeholder">Parfum n°3</option>
            <option value="Fraise">Fraise</option>
            <option value="Vanille">Vanille</option>
            <option value="Chocolat">Chocolat</option>
            <option value="Menthe">Menthe</option>
            <option value="Pistache">Pistache</option>
            <option value="Noix de coco">Noix de coco</option>
            <option value="Thé matcha">Thé vert matcha</option>
        </select>
        <select class="select-parfums" name="parfums4" id="parfums4">
            <option value="" class="option-placeholder">Parfum n°4</option>
            <option value="Fraise">Fraise</option>
            <option value="Vanille">Vanille</option>
            <option value="Chocolat">Chocolat</option>
            <option value="Menthe">Menthe</option>
            <option value="Pistache">Pistache</option>
            <option value="Noix de coco">Noix de coco</option>
            <option value="Thé matcha">Thé vert matcha</option>
        </select>
        </div>
    <hr class="hr-separator">
    <div class="etape etape-2">
            <h3 class="form-title">Etape 2 : Suppléments <span class="mini">-optionnel</span></h3>
            <div class="checkbox-container">
                <input type="checkbox" name="pepites" id="pepites">
                <label for="pepites"> Pépites de chocolat</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="chantilly" id="chantilly">
                <label for="chantilly"> Chantilly maison</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="amandes" id="amandes">
                <label for="amandes"> Amandes effilées</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="vermicelle" id="vermicelle">
                <label for="vermicelle"> Vermicelle</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="fruits" id="fruits">
                <label for="fruits"> Morceaux de fruits</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="coulischocolat" id="coulischocolat">
                <label for="coulischocolat"> Coulis au chocolat</label>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="coulisframboise" id="coulisframboise">
                <label for="coulisframboise"> Coulis à la framboise</label>
            </div>
        </div>
    <hr class="hr-separator">
    <div class="etape etape-3">
        <h3 class="form-title">Etape 3 : Choisir un contenant</h3>
        <div class="radio">            
            <input type="radio" name="contenant" id="cornet" value="cornet" checked>
            <label for="cornet">Cornet</label>
        </div>
        <div class="radio">
            <input type="radio" name="contenant" id="coupelle" value="coupelle">
            <label for="coupelle">Coupelle</label>
        </div>
        <div class="radio">
            <input type="radio" name="contenant" id="pot" value="pot">
            <label for="pot">Pot 300g</label>
        </div>
        <div class="radio">
            <input type="radio" name="contenant" id="bac" value="bac">
            <label for="bac">Bac 500g</label>
        </div>

    </div>
    <button type="submit">Commander</button>
</form>

<?php require 'footer.php' ?>
