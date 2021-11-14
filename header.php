<?php
    $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    if ( $page_name == 'index' ) $page_name = 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title> <?php echo ucfirst($page_name); ?> / 3D Printing Nerds</title>
</head>
<body>
    
    <?php 
        if ( $page_name == 'home' )
            echo '<header class="main-header" id="id-main-header"> 
                    <div class="container">
                        <div class="logo"><img src="img/logo_main.png" alt="hlavne_logo" class="logo-main"></div>
                        <div class="hamburger" id="hamburger-btn">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="links">
                            <ul class="navigation">
                                <li><a href="index.php" class="selected">Home</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="is-empty">
                                    <div class="empty">cart is empty</div>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>';
        else
            echo '<header class="main-header header-blue" id="id-main-header"> 
                    <div class="container">
                        <div class="logo"><img src="img/logo_main.png" alt="hlavne_logo" class="logo-main"></div>
                        <div class="hamburger" id="hamburger-btn">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="links">
                            <ul class="navigation">'; 
                                if ( $page_name == 'shop' ):
                                    echo '<li><a href="index.php">Home</a></li>
                                            <li><a href="shop.php" class="selected">Shop</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li class="is-empty">
                                                <div class="empty">cart is empty</div>
                                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                            </li>';
                                endif;
                                if ( $page_name == 'services' ):
                                    echo '<li><a href="index.php">Home</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="services.php" class="selected">Services</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li class="is-empty">
                                                <div class="empty">cart is empty</div>
                                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                            </li>';
                                endif;
                                if ( $page_name == 'contact' ):
                                    echo '<li><a href="index.php">Home</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="contact.php" class="selected">Contact</a></li>
                                            <li class="is-empty">
                                                <div class="empty">cart is empty</div>
                                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                            </li>';
                                endif;
                            echo '</ul>
                        </div>
                    </div>
                </header>';
        ?>

    

    