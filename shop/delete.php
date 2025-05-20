<?php
    session_start();
    
    $id = $_GET['num_prod'];
    
    //Gestion de la suppression des elements
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qte']--;

        if ($_SESSION['cart'][$id]['qte'] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
    }

    header('Location: cart.php');
    exit;
?>
