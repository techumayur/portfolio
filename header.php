<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="apple-mobile-web-app-capable" content="yes">

     <title>Portfolio Techu Mayur | <?php echo $title; ?> </title>
     <!-- Seo Link Here -->
     <meta name="description" content="">
     <meta name="author" content="SitePoint">
     <meta property="og:title" content="">
     <meta property="og:type" content="website">
     <meta property="og:url" content="">
     <meta property="og:description" content="">
     <meta property="og:image" content="image.png">
     <!-- Fav Icon Link Here -->
     <link rel="icon" type="image/png" href="assets/images/common/favicon.png" />
     <!-- DNS Prefetch -->
     <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.google-analytics.com" crossorigin>
     <link rel="preconnect" href="https://www.google.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.google.com" crossorigin>
     <!-- All CSS FILES -->
     <!-- Bootstrap Css File Link Here -->
     <link href="assets/bootstrap/bootstrap.min.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <!--  Fancybox Css File Link Here -->
     <link href="assets/fancybox/fancybox.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <!-- Fontawesome Css File Link Here -->
     <link href="assets/font-awesome/all.min.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <!-- Slick Slider Css File Link Here -->
     <link href="assets/slick-slider/slick.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <link href="assets/slick-slider/slick-theme.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <!-- Animation Css File Link Here -->
     <link media="all" rel="preload" as="style" onload="this.rel='stylesheet'" href="assets/animation/aos.css" />
     <!-- Comman Css File Link Here -->
     <link href="assets/comman/style.min.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <!-- Responsive Css File Link Here -->
     <link href="assets/comman/responsive.min.css" media="all" rel="preload" as="style" onload="this.rel='stylesheet'" />
     <style>
          .loader {
               position: fixed;
               left: 0px;
               top: 0px;
               width: 100%;
               height: 100%;
               z-index: 9999;
               background: url('assets/images/common/loader.gif') 50% 50% no-repeat rgb(255, 255, 255);
          }
     </style>
</head>

<body>

     <!-- Loader Start Here -->
     <div class="loader">

     </div>
     <!-- Loader End Here -->

     <!-- 1. Header Start Here -->
     <header class="header-wrapper">
          <nav class="navbar navbar-expand-lg fixed-top">
               <div class="container">
                    <a class="navbar-brand" href="index.php">
                         <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                         <ul class="navbar-nav menu-navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="about-me.php">About Me</a>
                              </li>
                              <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="portfolio.php" id="portfoliodropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Portfolio</a>
                                   <ul class="dropdown-menu" aria-labelledby="portfoliodropdown">
                                        <li>
                                             <a class="dropdown-item" href="html-css.php">HTML CSS </a>
                                        </li>
                                        <li>
                                             <a class="dropdown-item" href="bootstrap.php"> Bootstrap </a>
                                        </li>
                                        <li>
                                             <a class="dropdown-item" href="php.php">PHP </a>
                                        </li>
                                        <li>
                                             <a class="dropdown-item" href="wordpress.php">Wordpress</a>
                                        </li>

                                   </ul>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="coming-soon.php">Resume</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="contact-me.php">Contact Me</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="blog.php">Blog</a>
                              </li>
                              <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="coming-soon.php" id="techdropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tech</a>
                                   <ul class="dropdown-menu" aria-labelledby="techdropdown">
                                        <li><a class="dropdown-item" href="coming-soon.php">Tips and tricks</a></li>
                                        <li><a class="dropdown-item" href="coming-soon.php">Tutorials</a></li>
                                        <li><a class="dropdown-item" href="coming-soon.php">Source Code</a></li>
                                   </ul>
                              </li>
                              <!-- Hire Me Button -->
                              <li class="hireme-btn">
                                   <a href="#" class="main-btn" data-bs-toggle="modal" data-bs-target="#contact-form-popup">
                                        Hire Me
                                   </a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </header>
     <!-- 1. Header End Here -->