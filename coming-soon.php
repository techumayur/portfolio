<?php
$title = "Home";
include('header.php');
?>

<!-- 1. Coming Soon Section Start Here -->
<section class="coming-soon">
     <div class="container">
          <div class="row">
               <div class="col-lg-7 align-self-center">
                    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">Coming Soon</h1>
                    <h3 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">Get notified when It launch</h3>
                    <form method="post" action>
                         <div class="col-lg-10" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                              <div class="input-group mb-3">
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" aria-label="email" aria-describedby="button-addon2">
                                   <button class="main-btn border-0" type="button" id="button-addon2">Notify Me</button>
                              </div>
                         </div>
                    </form>
                    <div class="coming-soon-icons" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                         <div class="social-icon">
                              <ul class="list-unstyled d-flex ">
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-facebook-f"></i>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-instagram"></i>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-twitter"></i>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-linkedin-in"></i>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-youtube"></i>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#" target="_blank">
                                             <i class="fab fa-github"></i>
                                        </a>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="col-lg-5">
                    <img loading="lazy" src="assets/images/common/coming-soon.png" class="img-fluid" alt="Coming Soon" />
               </div>
          </div>
     </div>
</section>
<!-- 1. Coming Soon Section End Here -->

<?php
include('contact-form.php');
include('footer.php');
include('files-link.php');
?>