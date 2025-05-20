<?php 
    session_start();
    require 'database.php';
    
    $products = $pdo->query("SELECT * FROM Produit")->fetchAll(PDO::FETCH_ASSOC);
?>

<?php ob_start(); ?>

<!--Code de test-->
<h1>Nos Produits</h1>
    <a href="cart.php">Voir le panier</a>
    <div class="produits">
        <?php foreach ($produits as $produit): ?>
        <div class="produit">
            <img src="pictures/<?= $produit['image'] ?>" width="100">
            <h3><?= $produit['nom_prod'] ?></h3>
            <p><?= $produit['description'] ?></p>
            <p><?= number_format($produit['prix_unit'], 2, ',', ' ') ?> €</p>
            <a href="add.php?id=<?= $produit['num_prod'] ?>">Ajouter au panier</a>
        </div>
        <?php endforeach; ?>
    </div>

<?php
    $content = ob_clean();
    require_once 'template.php';
?>



