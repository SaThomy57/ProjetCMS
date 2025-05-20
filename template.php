<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopelia</title>
    <link rel="stylesheet" href="main.css">
    <!--Ajout de Maison & panier & loupe-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!--Ajout d'un favico-->
    <link rel="icon" href="../pictures/sac-orange-logo.ico" type="image/ico"><!--Modifier l'icone-->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>   
                    <a href="home.php">
                        
                        <div class="logo">
                            <i class="fas fa-bag-shopping"></i> <span>Shopelia</span>
                        </div>
                        <!--HOME-->
                    </a>
                </li>
                <li>
                    <div class="search-container">
                        <input type="text" id="search" placeholder="Search" class="searching-bar">
                        <!--<i class="fas fa-search"></i>-->
                    </div>
                </li>
                <li><a href="shop/index.php">produit</a></li>
                <li>
                    <a href="login.php">
                        <div>
                            <i class="fas fa-user"></i>
                            <span id="Connect">Se connecter</span>/<span id="NewAccount">S'inscrire</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="cart.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>&#169;Time</footer>
</body> 
</html>