<?php
    session_start();
    
    $num = $_GET['num_prod'];
    $nom = $_GET['nom_prod'];
    $prix = $_GET['prix_unit'];
    $qte = 1;

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$num]['qte'] += 1;
    } else {
        $_SESSION['cart'][$num] = [
            'nom' => $nom,
            'prix' => $prix,
            'qte' => $qte
        ];
    }
    
    header('Location: cart.php');
    exit;
?>
