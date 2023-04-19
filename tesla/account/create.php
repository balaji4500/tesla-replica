<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="create.css">
    

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/tesla.png" id="img1"></a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="a1"> <i class="bi bi-globe2"></i> en- US<span
                                class="sr-only"></span></a>
                    </li>
                    </u>
            </div>
        </nav>
<div class="text-center" id="div1">

<h6>Step 1of2</h6>
<h1>Create Account</h1>
<form action="dbcon.php" method="post">
<p>First name</p>
<input type="text" name="first" required oninvalid="this.setCustomValidity('please give your firtsnmae')"
onchange="this.setCustomValidity('')" >
<p>Last name</p>
<input type="text" name="second" required  oninvalid="this.setCustomValidity('please give your secondname')"
onchange="this.setCustomValidity('')">
<p>Password</p>
<input type="password" name="pass" required oninvalid="this.setCustomValidity('please give your password')"
onchange="this.setCustomValidity('')"><br>
 <input type="checkbox" required> <span id=sp>By continuing,I understand and agree to Tesla's privacy notes and Terms and Use for creating a Tesla Account </span><br><br>
 <input type="submit" value="Next" id="in4">
</form>
</div>



</body>
</html>