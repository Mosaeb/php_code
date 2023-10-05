<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black">
    <nav class="navbar navbar-expand bg-dark navbar-dark ">
        <div class="container">
            <a href="" class="navbar-brand"><i class="fa-brands fa-amazon fa-2xl" style="color: #ebe305;"></i></a>
            <ul class="navbar-nav mx-auto">
                <li><a href="page_move.php?page=home" class="nav-link text-warning">Home</a></li>
                <li><a href="page_move.php?page=about" class="nav-link text-warning">About</a></li>
                <li><a href="" class="nav-link text-warning">Contact</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle text-warning" data-bs-toggle="dropdown">Service</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a href="" class="dropdown-item text-warning">Service One</a></li>
                        <li><a href="" class="dropdown-item text-warning">Service Two</a></li>
                        <li><a href="" class="dropdown-item text-warning">Service Three</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link text-warning">Log In</a></li>
                <li><a href="" class="nav-link text-warning">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    
    <section>
        <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/p1.jpg" class="w-100" height="500" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/p2.jpg" class="w-100" height="500" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/p3.jpg" class="w-100" height="500" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/p4.jpg" class="w-100" height="500" alt="">
                </div>
            </div>
            <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#slider" class="carousel-control-next" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row ">
                <?php foreach ($products as $pro){ ?>
                <div class="col-md-3 mb-5 ">
                    <div class="card bg-secondary rounded-3 border-info border-3">
                        <img class="rounded-3" src="<?php echo $pro['image']?>" alt="">
                        <div class="card-body">
                            <h5><?php echo $pro['name']?></h5>
                            <p class="fw-bold"><?php echo $pro['price']?></p>
                            <hr/>
                            <a href="" class="btn btn-info">Details</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>