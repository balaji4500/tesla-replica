<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="tesla.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <!-- nav bar -->
    <div class="banner-image w-100 vh-100 d-flex  justify-content-center align-items-center">
        <div id="main1">
            <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="images/tesla_logo_PNG21.png" id="img1"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav " aria-expanded="false" aria-label="Toggle navigation ">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/model%20s/nav/s.php"
                                    id="a1">Model S <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/model%203/nav/3.php"
                                    id="a2">Model 3</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/model%20x/nav/x.php"
                                    id="a3">Model X</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="http://192.168.0.116:5500/tesla/model%20y/nav%20/y.html"
                                    id="a4">Model Y</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/solar%20panels/learn.php"
                                    id="a5">Solor Roof</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link"
                                    href="http://localhost/phpprograms/tesla/solar%20panels/learn.php" id="a6">Solor
                                    Panels</a>
                            </li>
                            <li class="nav-item active ms-auto">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/accessories/shop.php"
                                    id="a7">Shop</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/phpprograms/tesla/account/acc.php"
                                    id="a8">Account</a>
                            </li>
                            <li class="nav-item active" id="a9">
                                <a class="nav-link" href="">Menu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--model y  -->
            <div class="text-center " data-aos="fade-up">
                <h1 id="text">Model Y</h1>
                <a href="#" id="a10"> Schedule a Demo Drive</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/model%20y/order.php"> <button type="button"
                            id="btn1" class="btn  btn-lg">Customer Order</button></a>
                    <a href="http://localhost/phpprograms/tesla/model%20y/inventory.php"><button type="button"
                            id="btn2" class="btn  btn-lg">View Inventory</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- model 3 -->
    <div class="banner-image d-flex justify-content-center align-items-center " id="img2">
        <div id="main2">
            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Model 3</h1>
                <a href="#" id="a10"> Schedule a Demo Drive</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/model%203/mod.php"><button type="button" id="btn1"
                            class="btn  btn-lg">Customer Order</button></a>
                    <a href="http://localhost/phpprograms/tesla/model%203/in.php"> <button type="button" id="btn2"
                            class="btn  btn-lg">View Inventory</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- model s -->
    <div class="banner-image d-flex justify-content-center align-items-center " id="img3">
        <div id="main3">
            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Model S</h1>
                <a href="#" id="a10"> Schedule a Demo Drive</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/model%20s/order.php"><button type="button" id="btn1"
                            class="btn  btn-lg">Customer Order</button></a>
                    <a href="http://localhost/phpprograms/tesla/model%20s/in.php"> <button type="button" id="btn2"
                            class="btn  btn-lg">View Inventory</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- model x -->
    <div class="banner-image d-flex justify-content-center align-items-center" id="img4">
        <div id="main4">
            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Model X</h1>
                <a href="#" id="a10"> Schedule a Demo Drive</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/model%20x/order.php"> <button type="button"
                            id="btn1" class="btn  btn-lg">Customer Order</button></a>
                    <a href="http://localhost/phpprograms/tesla/model%20x/in.php"> <button type="button" id="btn2"
                            class="btn  btn-lg">View Inventory</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- solor panel -->
    <div class="banner-image d-flex justify-content-center align-items-center" id="img5">
        <div id="main5">

            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Solor Panels</h1>
                <a href="http://192.168.43.133:5500/html/tesla/solar%20panels/order.html" id="a11">Lowest cost Solor
                    Panels in America</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/solar%20panels/order.php"> <button type="button"
                            id="btn1" class="btn  btn-lg" required>Order Now</button></a>
                    <a href="http://localhost/phpprograms/tesla/solar%20panels/learn.php"><button type="button"
                            id="btn2" class="btn  btn-lg">Learn More</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- solor roof -->
    <div class="banner-image d-flex justify-content-center align-items-center" id="img6">
        <div id="main6">
            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Solor Roofs</h1>
                <a href="http://192.168.43.133:5500/html/tesla/solor%20roof/learn.html" id="a11">Produce Clean Enery
                    From The Roof</a>
                <div class="container">
                    <a href="http://localhost/phpprograms/tesla/solor%20roof/order.php"> <button type="button"
                            id="btn1" class="btn  btn-lg" required>Order Now</button></a>
                    <a href="http://localhost/phpprograms/tesla/solor%20roof/learn.php"> <button type="button"
                            id="btn2" class="btn  btn-lg">Learn More</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- accessories -->
    <div class="banner-image d-flex justify-content-center align-items-center" id="img7">
        <div id="main7">
            <div class="text-center" data-aos="fade-up">
                <h1 id="text">Accessories</h1>
                <div class="container">

                    <a href="http://localhost/phpprograms/tesla/accessories/shop.php"><button type="button"
                            id="btn3" class="btn  btn-lg" required>Shop now</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="tesla.js"></script>




</body>

</html>