<?php
$title = "Portfolio";
include('header.php');
?>

<!-- 1. Banner Section Start Here -->
<section class="portfolio-banner banner" style="background:url('assets/images/common/cta-bg.png');">
     <div class="container">
          <div class="row">
               <div class="col-12 pt-5">
                    <h1>Portfolio</h1>
               </div>
               <div class="col-12">
                    <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </div>
</section>
<!-- 1. Banner Section End Here -->

<!-- 2.Portfolio Section Start Here -->
<section class="portfolio">
     <div class="container">
          <div class="row">
               <div class="col-12 text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
                    <h3 class="sub-title">
                         Showcasing Some Of My Best Work
                    </h3>
                    <h2 class="title title-center">
                         The work that I did
                    </h2>
               </div>
               <div class="col-12 portfolio-content">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
                         <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                         </li>
                         <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-html-tab" data-bs-toggle="pill" data-bs-target="#pills-html" type="button" role="tab" aria-controls="pills-html" aria-selected="false">HTML & CSS</button>
                         </li>
                         <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-bootstrap-tab" data-bs-toggle="pill" data-bs-target="#pills-bootstrap" type="button" role="tab" aria-controls="pills-bootstrap" aria-selected="false">Bootstrap</button>
                         </li>
                         <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php" type="button" role="tab" aria-controls="pills-php" aria-selected="false">PHP</button>
                         </li>
                         <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-wordpress-tab" data-bs-toggle="pill" data-bs-target="#pills-wordpress" type="button" role="tab" aria-controls="pills-wordpress" aria-selected="false">WordPress</button>
                         </li>
                         <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-shopify-tab" data-bs-toggle="pill" data-bs-target="#pills-shopify" type="button" role="tab" aria-controls="pills-shopify" aria-selected="false">Shopify</button>
                         </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                         <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                              <!-- All Portfolio -->
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-html" role="tabpanel" aria-labelledby="pills-html-tab">
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-bootstrap" role="tabpanel" aria-labelledby="pills-bootstrap-tab">
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab">
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-wordpress" role="tabpanel" aria-labelledby="pills-wordpress-tab">
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-shopify" role="tabpanel" aria-labelledby="pills-shopify-tab">
                              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5  justify-content-center">
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2500">
                                        <div class="card h-100">
                                             <div class="portfolio-images">
                                                  <div class="portfolio-screens">
                                                       <div class="portfolio-image-desktop">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-desktop.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <picture>
                                                            <source srcset="assets/images/portfolio/desktop.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                            <source srcset="assets/images/portfolio/desktop.png" type="image/png" class="img-fluid" alt="Desktop">
                                                            <img loading="lazy" src="assets/images/portfolio/desktop.png" class="img-fluid" alt="Desktop">
                                                       </picture>
                                                  </div>
                                                  <div class="portfolio-screens portfolio-laptop-screen">
                                                       <div class="portfolio-image-laptop">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-laptop.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/laptop.png" class="img-fluid" alt="Laptop" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-ipad-screen">
                                                       <div class="portfolio-image-ipad">
                                                            <picture>
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.webp" type="image/webp" class="img-fluid" alt="Desktop">
                                                                 <source srcset="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" type="image/png" class="img-fluid" alt="Desktop">
                                                                 <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-ipad.png" class="img-fluid" alt="Desktop">
                                                            </picture>
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/ipad.png" class="img-fluid" alt="Ipad" />
                                                  </div>
                                                  <div class="portfolio-screens portfolio-mobile-screen">
                                                       <div class="portfolio-image-mobile">
                                                            <img loading="lazy" src="assets/images/portfolio//mahindra/mahindra.com.bd-mobile.png" class="img-fluid" alt="Desktop" />
                                                       </div>
                                                       <img loading="lazy" src="assets/images/portfolio/mobile.png" class="img-fluid" alt="mobile" />
                                                  </div>

                                             </div>
                                             <div class="card-body portfolio-card-body">
                                                  <div class="row tech-author">
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-folder-open"></i>
                                                            <span>Categories</span>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>17/11/1995</span>
                                                       </div>
                                                  </div>
                                                  <div class="card-title">
                                                       <h5>Mahindra Bangladesh</h5>
                                                  </div>
                                                  <div class="card-text">
                                                       <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                  </div>
                                             </div>
                                             <div class="card-footer">
                                                  <div class="row">
                                                       <div class="col-8">
                                                            <div class="row">
                                                                 <div class="col-3">
                                                                      <div class="home-blog-author">
                                                                           <picture>
                                                                                <source srcset="assets/images/blog/avatar.webp" type="image/webp" class="img-fluid" alt="Avatar">
                                                                                <source srcset="assets/images/blog/avatar.png" type="image/png" class="img-fluid" alt="Avatar">
                                                                                <img loading="lazy" src="assets/images/blog/avatar.png" class="img-fluid" alt="Avatar">
                                                                           </picture>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-9 align-self-center ps-0">
                                                                      <div class="home-author-name">
                                                                           <h5>Techu Mayur</h5>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                       <div class="col-4 text-center align-self-center">
                                                            <a href="portfolio-inner.php" class="home-blog-btn">
                                                                 <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 2.Portfolio Section End Here -->

<!-- 3.CTA Section Start Here -->
<section class="home-cta cta-bg" style="background-image:url('assets/images/common/cta-bg.png');
background-image:url('assets/images/common/cta-bg.webp')">
     <div class="container">
          <div class="row">
               <div class="col-lg-8" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2500">
                    <h2>
                         Want A Source Code<br>
                         Of Projects?
                    </h2>
               </div>
               <div class="col-lg-4 align-self-center pt-4 pt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="2500">
                    <a href="source-code.php" class="main-btn cta-btn">
                         Get Here
                    </a>
               </div>
          </div>
     </div>
</section>
<!-- 3.CTA Section End Here -->

<!-- 4.Clients Section Start Here -->
<section class="portfolio-clients">
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <h3 class="sub-title">
                         Showcasing Some Clients
                    </h3>
                    <h2 class="title title-center">
                         A Glimpse of Clients
                    </h2>
               </div>
               <div class="col-12 portfolio-client-content">
                    <div class="portfolio-client-slider">
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                         <div class="portfolio-client-items">
                              <div class="card h-100">
                                   <div class="card-body">
                                        <img loading="lazy" src="assets/images/common/logo.png" class="img-fluid" alt="Logo">
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="portfolio-client-slider-arrows">
                         <div class="portfolio-client-slider-prev">
                              <i class="fas fa-arrow-left"></i>
                         </div>
                         <div class="portfolio-client-slider-next">
                              <i class="fas fa-arrow-right"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 4.Clients Section End Here -->

<?php
include('contact-form.php');
include('footer.php');
?>