<?php ob_start(); 
    session_start();
    require 'database.php';
    
    $id = array_keys($_SESSION['cart'] ?? []);
    $produits = [];

    if (!empty($id)) {
        $sql = 'SELECT * FROM produit WHERE num_prod IN (' . implode(',', array_map('intval', $id)) . ')';
        $produits = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
?>
    
    <h1>Shopping Cart</h1>
    <a href="shop/index.php"> Retour boutique</a>
    <?php if (empty($produits)): ?>
        <p>Votre panier est vide ! </p>
    <?php else :?>
        <!--Test a refaire-->
        <table>
      <tr>
        <th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th><th></th>
      </tr>
      <?php $total = 0; ?>
      <?php foreach ($produits as $produit): ?>
        <?php
          $qte = $_SESSION['cart'][$produit['num_prod']];
          $sstotal = $produit['prix_unit'] * $qte;
          $total += $sstotal;
        ?>
        <tr>
          <td><?= $htmlspecialchar(produit['nom_prod']) ?></td>
          <td><?= number_format($produit['prix_unit'], 2, ',', ' ') ?> €</td>
            <td>
                <?= $qte ?>
            </td>
          <td><?= number_format($sstotal, 2, ',', ' ') ?> €</td>
          <td><a href="delete.php?num_prod=<?= $produit['num_prod'] ?>">Supprimer</a></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="3"><strong>Total</strong></td>
        <td><strong><?= number_format($total, 2, ',', ' ') ?> €</strong></td>
      </tr>
    </table>
  <?php endif; ?>

<?php 
    $content=ob_get_clean();
    require_once "template.php"
?>

