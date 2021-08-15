<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Mineversal Admin Dashboard"/>
        <meta name="author" content="Azhar Rizki Zulma a.k.a Joe Hawk"/>
        <meta name="keywords" content="mineversal,mineversals,keren,gratis,viral,karya,startup,followers,following,berbisnis,roleplay,social media,media sosial,Indonesia,sosial,application,app,android,ios,fun app,app for you,for you,trending">
        <meta name="google-site-verification" content=""/>
        <meta property="og:title" content="Mineversal - Universe in your hand"/>
        <meta property="og:description"content="Mineversal is everything you need"/>
        <meta property="og:image" content="https://mineversal.com/assets/img/logo2.png"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://mineversal.com/"/>
        
        <!-- Default CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- API Font -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap 5.0.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo2.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo2.png">
        <title>Mineversal | Admin Dashboard</title>
    </head>
    <body class="bg-dark font-monospace fs-5">
        <!-- Nav Bar -->
        <header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-styles">
                <div class="container-fluid">
                    <button class="navbar-toggler navbar-toggler-left" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" id="brand" href="https://mineversal.com"><img src="../assets/img/logo.png" width="200"></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="../"><i class="fa fa-fw fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service"><i class="fa fa-fw fa-globe"></i> Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about"><i class="fa fa-fw fa-user"></i> About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-fw fa-folder"></i> Our Business</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="https://news.mineversal.com">News</a></li>
                                    <li><a class="dropdown-item" href="https://music.mineversal.com">Music</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="https://beauty.mineversal.com">Beauty</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        
        <!-- Side Bar -->
        <section id="sidebar" class="row">
            <nav id="sidebarMenu" class="sidebar navbar-dark bg-dark col-md-3 col-lg-2 d-md-block collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item my-auto active">
                            <a class="nav-link active" href="account"><i class="fa fa-fw fa-user"></i> My Account</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        
        <!-- Dashboard -->
        <section class="container-fluid section-about">
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 kanan">
                <div class="container-fluid mb-5 pt-5 text-white">
                    <h2>Dashboard</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="dashboard-card" href="#">
                                <div class="card bg-dark">
                                    <div class="card-body mx-0 row text-white">
                                        <i class="icon mx-0 fa fa-user col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">Pesan</p>
                                            <h2 class="text-left row col-md-12">12<small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a class="dashboard-card" href="#">
                                <div class="card bg-dark">
                                    <div class="card-body mx-0 row text-white">
                                        <i class="icon mx-0 fa fa-user col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">Pesan</p>
                                            <h2 class="text-left row col-md-12">12<small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a class="dashboard-card" href="#">
                                <div class="card bg-dark">
                                    <div class="card-body mx-0 row text-white">
                                        <i class="icon mx-0 fa fa-user col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">Pesan</p>
                                            <h2 class="text-left row col-md-12">12<small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a class="dashboard-card" href="#">
                                <div class="card bg-dark">
                                    <div class="card-body mx-0 row text-white">
                                        <i class="icon mx-0 fa fa-user col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">Pesan</p>
                                            <h2 class="text-left row col-md-12">12<small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer class="col-md-10 ms-sm-auto py-2 bg-dark footer-style">
            <div class="section-footer container-fluid mt-5">
                <div class="row text-white px-5">
                    <div class="col-md-3 col-xs-12 col-text">
                        <img src="../assets/img/logo.png" height="30px" class="mb-4" alt="Mineversal Logo">
                        <p>Yesterday is history, today is reality, tomorrow is a mystery.</p>
                    </div>
                    <div class="col-md-3 menu col-xs-12">
                        <h4 class="mb-4">Information</h4>                    
                        <ul>
                            <li><a href="term">Term of Services</a></li>
                            <li><a href="policy">Privacy Policy</a></li>
                            <li><a href="disclaimer">Disclaimer</a></li>
                            <li><a href="https://ads.mineversal.com/">Advertising</a></li>
                            <!----<li><a href="">Verification</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <h4 class="mb-4">Who are Mineversal?</h4>
                        <ul>
                            <li><a href="about">About Us</a></li>
                            <li><a href="team">Our Team</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <!-- <li><a href="">Gallery</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12" id="contact">
                        <h4 class="mb-4">Follow <span style="color: lightblue;">Mineversal!</span></h4>
                        <div>
                            <a href="https://facebook.com/mineversal" class="fa fa-facebook"></a>
                            <a href="https://twitter.com/mineversal_" class="fa fa-twitter"></a>
                            <a href="https://instagram.com/mineversal" class="fa fa-instagram"></a>
                            <a href="https://youtube.com/mineversal" class="fa fa-youtube"></a>
                        </div>
                        <div class="mt-2">
                            <a href="https://wa.me/+6285156633114" class="fa fa-whatsapp"></a>
                            <a href="https://t.me/mineversal" class="fa fa-telegram"></a>
                            <a href="https://sestyc.com/user/mineversal" class="fa fa-heart"></a>
                            <a href="https://open.spotify.com/artist/7mG43AWgnlQIYNbQXsBFfy?si=D4tcTrCrSPSrhljhtCn1_Q" class="fa fa-spotify"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="container-fluid mt-5">
                <div class="row text-white">
                    <hr>
                    <div class="col-xs-12 copy-right col-md-12 p-0 text-center">
                        <p>&copy; 2021 <span style="color: lightblue;">Mineversal</span>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>