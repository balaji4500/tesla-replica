<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design your inventory| Model  x</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="#"><img src="images/tesla_logo_PNG21.png" alt="" id="img1"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="#" id="a1">Model S <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Model 3</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">Model X</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#">Model Y</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="#">Solar Roof</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="#">Solar Panel</a>
              </li>
              
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <li id="li1" class="nav-item ">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li   id="li1"class="nav-item ">
                <a class="nav-link" href="#">Account</a>
              </li>
              <li  id="li1"class="nav-item ">
                <a class="nav-link" href="#">Menu</a>
              </li>
            
          </form>
        </div>
      </nav>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
          <a class="navbar-brand" href="#"> <h2>Inventory</h2></a>
          <a class="navbar-brand" href="#"ms-auto> <h3>Model X</h3></a>
          <li  id="li1"class="nav-item dropdown ms-auto">
            <a  id="a2"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Relavance
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"> Relavance</a>
              <a class="dropdown-item" href="#">Price : low to high</a>
              <a class="dropdown-item" href="#">Price : high to low</a>
              <a class="dropdown-item" href="#">Milage : high to low</a>
              <a class="dropdown-item" href="#">Milage : low to high</a>      
         </li>
        </nav>
      </div><br><br>
      <div class="row">
        <div class="col-8">
          <img src="images/white.jpg"  id="change-img" class="img-fluid">
          </div>
    <div class="col-4"><br>
  <h5>Exterior paint</h5>
<div class="container">
<button class="btn-link"></button>
<button class="btn-dark"></button>
<button class="btn-primary"></button>
<button class="grey"></button>
<button class="btn-danger"></button>
</div><br><br>
<h4>Interior Paint</h4>
<div class="button">
<button class="btn-link" id="btn1"></button>
<button class="btn-dark" id="btn2"></button>
</div><br><br>
<button type="button"  id="btn3" class="btn btn-dark">Get Paid </button><br><br>
        <button type="button"  id="btn4"   class="btn btn-dark ">Experience Your Drive</button>
</div>


      </div>



<script src="in.js"></script>    
    
</body>
</html>