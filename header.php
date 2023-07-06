<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>SmartPhone Shop</title>
    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Owl carasol -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
                integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

                <!-- font awesome -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
                    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom css -->
        <link rel="stylesheet" href="style.css">

        <!-- php -->
        <?php
        // Require functions
         require ('functions.php');
         ?>
</head>
<body>
    
    <!-- --------------------------------Header-------------------------------------- -->

    <header id="header">
        <!-- <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50"><b>National Institute of Engineering Mysuru</b></p>
        <div class="font-rale font-size-14">
            <a href="Login and Signup/signlog.html" class="px-3 border-right border-left text-dark no_deco">Login</a>

          </div>  
        </div> -->
        <!-- primary nav -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SmartPhone Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#top-sale">Top Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#special-prices">Special Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#new-phones">New Phones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blogs">Blogs</a>
                        </li>
                       
        
                    </ul>
                    <form action="#" class="font-size-14 font-rale no_deco">
                        <a href="Cart.php" class="py-2 rounded-pill color-primary-bg no_deco">
                            <span class="font-size-16 px-2 text-white no_deco"><i class="fas fa-shopping-cart "></i></span>
                            <span class="px-3 pt-2 rounded-pill text-dark bg-light no_deco"><b><?php echo count($product->getData('cart'));?></b></span>
                        </a>
                    </form>
        
                </div>
            </div>
        </nav>
        
        
        <!-- ENd primary nav -->
    </header>
    <!-- --------------------------------End Header-------------------------------------- -->
   

    <!-- ----------------------------------Main--------------------------------------- -->

    <main id="main-site">