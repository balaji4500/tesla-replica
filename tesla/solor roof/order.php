<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solar Roofs</title>
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
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>

<body>
    <section id="main1">
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/tesla_logo_PNG21.png" id="img1"></a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="a1"> <i class="bi bi-globe2"></i> US<span
                                class="sr-only"></span></a>
                    </li>
                    </u>
            </div>
        </nav>

        <!-- carousel -->
        <div class="row g-0">

            <div class="col-sm-6 col-md-8" id="slide">
                <img src="images/Solar-Roof-Energy-Desktop-Global.webp" class="img-fluid">
            </div>

            <div class="col-6 col-md-4" id="side">
                <h2>Clean Power,</h2>
                <h3>Outage Protection</h3><br><br>
                <div class="container">
                    <h6>Home Address</h6>
                    <form action="solar.php" method="post">
                    <input type="text" name="address" id="in1" required oninvalid="this.setCustomValidity('please give your address')"
       onvalid="this.setCustomValidity('')"><br><br>
                    <h6>Average Electric Bill</h6>
                    <input type="number" name="electric" id="in1" required oninvalid="this.setCustomValidity('please metion your electricbill ')"
       onvalid="this.setCustomValidity('')">
                    <br><br><br>
                    <a href="#" id="a1">My home is new or being built</a><br><br><br>
               <input type="submit" value="Next" id="in4">
                    <br><br>
                    <p>We won't spam you in any way</p>
                   </form>
                </div>



            </div>
    </section>
</body>

</html>