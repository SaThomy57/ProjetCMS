<?php ob_start(); ?>
    <h1>Home</h1>
    <section class="">
        <?php
            //DB connect
            include_once "database.php";
            //
            $req = mysqli_query($Ecom, "SELECT * FROM Produit");
            while($row = mysqli_fetch_assoc($req)){
        ?>
        <form action="" class="">
            <div class="product">
                <img src="pictures/<?=$row['image']?>">
            </div>
            <div class="product_content">
                <h4 class="name"><?=$row['num_prod']?></h4>
                <h2 class="price"><?=$row['prix_unit']?></h2>
                <!--Bouton add au panier-->
            </div>
        </form>
        <?php } ?>
    </section>


<?php 
    $content=ob_get_clean();
    require_once "template.php"
?>