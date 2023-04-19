
<html>
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
    <link rel="stylesheet" href="acc.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>
<!-- nav -->
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

<div class="text-center">
<h1 >Sign In</h1>
<h6>Email <i class="bi bi-exclamation-circle"></i></h6>

<div id="div1" >
<form method="post" action="save.php">
<input type="email" name="email" id="in1" placeholder="email" required="required" oninvalid="this.setCustomValidity('please give your email')"
onchange="this.setCustomValidity('')"><br><br>
<input type="password" name="pass" id="in2" placeholder="password" required="required" oninvalid="this.setCustomValidity('please give your password')"
onchange="this.setCustomValidity('')"><br><br>
<input type="submit"  name="btn"value="next" id="in3">

</div><br>

<a href="#" id="a1">Trouble Sigining in?</a><br><br>
<p>or</p>
<Button id="btn1"><a href="http://localhost/phpprograms/tesla/account/create.php">create account</Button></a>   
</div>
 </body>
 

</html>


