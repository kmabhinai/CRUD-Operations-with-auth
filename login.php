<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if (isset($_POST['login'])) {
    $ret = mysqli_query($con, "SELECT * FROM vtech_user WHERE email='".$_POST['email']."' and password='". $_POST['password']."'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
        $extra = "dashboard";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    } else {
        echo "<script>alert('invalid id or password ');</script>";
        $extra = "login.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"
                style="font-weight: bold;font-family: Allerta, sans-serif;">finsweet</a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html" data-bs-target="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="index.html#aboutus">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="index.html#wwdo">What we do</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#footer">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>
                    <li class="nav-item"><button class="btn btn-primary" type="button"
                            style="margin-right: -34px;background: rgb(0,0,0);">Donate</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                </div>
                <form method="POST">
                    <div class="mb-3"><label class="form-label" for="email">Email</label>
                        <input class="form-control item" type="email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember me</label>
                        </div>
                    </div><button class="btn btn-primary" type="submit" name="login">Log In</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" style="width: 16%;">
                    <h5 style="margin: 71px 0px 8px;">finsweet</h5>
                </div>
                <div class="col-sm-3" style="width: 18%;">
                    <h5>Our Team</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">What we do</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-3" style="width: 18%;">
                    <h5>More</h5>
                    <ul>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Donate</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-3" style="width: 18%;">
                    <h5>Connect</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 text-danger" style="width: 30%;">
                    <h4 style="font-weight: bold;color: rgb(255,255,255);margin-top: 32px;">Subscribe to get latest
                        updates</h4><input class="border rounded" type="text"
                        style="height: 49px;background: rgb(43,47,49);border-color: rgb(99,96,96);width: 244.4px;margin-top: 10px;opacity: 0.27;color: rgb(255,255,255);font-family: Allerta, sans-serif;"
                        placeholder="Your email"><button class="btn btn-primary" type="button"
                        style="height: 50px;width: 106.1375px;background: rgb(255,255,255);color: rgb(0,0,0);font-size: 14px;text-align: center;border-style: none;font-family: Allerta, sans-serif;margin-top: -3px;">Subscribe</button>
                </div>
            </div>
        </div>
    </footer>   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>