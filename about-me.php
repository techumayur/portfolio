<?php
$title = "About Me";
include('header.php');
?>

<!-- 1.Banner Section Start Here -->
<section class="banner about-banner" style="background:url('assets/images/common/cta-bg.png');">
     <div class="container">
          <div class="row">
               <div class="col-12 pt-5">
                    <h1>About Me</h1>
               </div>
               <div class="col-12">
                    <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">About Me</li>
                         </ol>
                    </nav>
               </div>
          </div>
     </div>
</section>
<!-- 1.Banner Section End Here -->

<!-- 2.About Me Section Start Here -->
<section class="about-me">
     <div class="container">
          <div class="row">
               <div class="col-lg-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                    <picture>
                         <source srcset="assets/images/about/about-me.webp" type="image/webp" class="img-fluid" alt="About Me">
                         <source srcset="assets/images/about/about-me.jpg" type="image/png" class="img-fluid" alt="About Me">
                         <img loading="lazy" src="assets/images/about/about-me.jpg" class="img-fluid" alt="About Me">
                    </picture>
               </div>
               <div class="col-lg-6 align-self-center " data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <h3 class="sub-title">Who Am I?</h3>
                    <h2 class="title">
                         I'm Mayur Galaiya,<br>
                         A Frontend Developer
                    </h2>
                    <div class="about-me-content">
                         <p> I'm Techu Mayur from India, working as a Frontend Developer. I enjoy turning complex designs into simple, beautiful, and intuitive designs. Also, I have some kickass knowledge in WordPress and Shopify.</p>
                         <p> My role is to build your website in such a way that it can be functional and user-friendly but at the same time attractive. Moreover, I add a personal touch to your websites and make sure that it is eye-catching and easy to browse. My aim is to bring your websites and identity in the most creative way. I have created websites for many famous brands.</p>
                         <p> I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast, and deliver faster.</p>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 2.About Me Section End Here -->

<!-- 3.CTA Section Start Here -->
<section class="home-cta cta-bg" style="background-image:url('assets/images/common/cta-bg.png');
background-image:url('assets/images/common/cta-bg.webp')">
     <div class="container">
          <div class="row">
               <div class="col-lg-8" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1600">
                    <h2>
                         Want To Improve<br>
                         Your Skills?
                    </h2>
               </div>
               <div class="col-lg-4 align-self-center pt-4 pt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1600">
                    <a href="tech.php" class="main-btn cta-btn">
                         Know More
                    </a>
               </div>
          </div>
     </div>
</section>
<!-- 3.CTA Section End Here -->

<!-- 4.My Skills Section Start Here -->
<section class="aboutme-skills">
     <div class="container">
          <div class="row">
               <div class="col-lg-6">
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                         <h3 class="sub-title">My Level Of Knowledge In Some Tools</h3>
                         <h2>My creative skills & experiences.</h2>
                    </div>
                    <div class="aboutme-skills-tabs" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link active" id="pills-software-tab" data-bs-toggle="pill" data-bs-target="#pills-software" type="button" role="tab" aria-controls="pills-software" aria-selected="false">Software </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                   <button class="nav-link " id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab" aria-controls="pills-personal" aria-selected="true">Personal </button>
                              </li>
                         </ul>
                    </div>
               </div>
               <div class="col-lg-6 align-self-center">
                    <div class="tab-content" id="pills-tabContent">
                         <div class="tab-pane fade  show active" id="pills-software" role="tabpanel" aria-labelledby="pills-software-tab">
                              <div class="row rows-cols-2 row-cols-lg-5 justify-content-center g-5 gy-5">
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  HTML & HTML5
                                             </div>
                                             <img loading="lazy" src="assets/images/about/html.png" class="img-fluid" alt="HTML & HTM5">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  CSS & CSS3
                                             </div>
                                             <img loading="lazy" src="assets/images/about/css.png" class="img-fluid" alt="CSS & CSS">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Bootstrap 3/4/5
                                             </div>
                                             <img loading="lazy" src="assets/images/about/bootstrap.png" class="img-fluid" alt="Bootstrap">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Javascript
                                             </div>
                                             <img loading="lazy" src="assets/images/about/js.png" class="img-fluid" alt="Javascript">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Jquery
                                             </div>
                                             <img loading="lazy" src="assets/images/about/jquery.png" class="img-fluid" alt="Jquery">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  PHP
                                             </div>
                                             <img loading="lazy" src="assets/images/about/php.png" class="img-fluid" alt="PHP">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  WordPress
                                             </div>
                                             <img loading="lazy" src="assets/images/about/wordpress.png" class="img-fluid" alt="WordPress">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Shopify
                                             </div>
                                             <img loading="lazy" src="assets/images/about/shopify.png" class="img-fluid" alt="Shopify">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Adobe Photoshop
                                             </div>
                                             <img loading="lazy" src="assets/images/about/photoshop.png" class="img-fluid" alt="Adobe Photoshop">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Adobe XD
                                             </div>
                                             <img loading="lazy" src="assets/images/about/xd.png" class="img-fluid" alt="Adobe XD">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Figma
                                             </div>
                                             <img loading="lazy" src="assets/images/about/figma.png" class="img-fluid" alt="Figma">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Emailer
                                             </div>
                                             <img loading="lazy" src="assets/images/about/gmail.png" class="img-fluid" alt="Emailer">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Seo
                                             </div>
                                             <img loading="lazy" src="assets/images/about/pagespeed.png" class="img-fluid" alt="Pagespeed">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                              <div class="row rows-cols-2 row-cols-lg-3 justify-content-center g-5 gy-5">
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Time Management
                                             </div>
                                             <img loading="lazy" src="assets/images/about/time-management.png" class="img-fluid" alt="Time Management">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Efficiency
                                             </div>
                                             <img loading="lazy" src="assets/images/about/efficiency.png" class="img-fluid" alt="Efficiency">
                                        </div>
                                   </div>
                                   <div class="col" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                                        <div class="aboutme-skill-card">
                                             <div class="tooltip">
                                                  Integrity
                                             </div>
                                             <img loading="lazy" src="assets/images/about/integrity.png" class="img-fluid" alt="Integrity">
                                        </div>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 4.My Skills Section End Here -->

<!-- 5.Fun Fatcs Section Start Here -->
<section class="home-counter">
     <div class="container">
          <div class="row home-counter-wrapper g-4">
               <div class="col-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                    <h3 class="sub-title">This Are My Strongest Sides</h3>
                    <h2 class="title title-center">
                         Fun Facts
                    </h2>
               </div>
               <div class="col-6 col-lg-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                    <div class="card h-100 home-counter-content">
                         <span>50+</span>
                         <h5>Projects Completed</h5>
                    </div>
               </div>
               <div class="col-6 col-lg-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                    <div class="card h-100 home-counter-content">
                         <span>3+</span>
                         <h5>Years Of Experience</h5>
                    </div>
               </div>
               <div class="col-6 col-lg-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                    <div class="card h-100 home-counter-content">
                         <span>50+</span>
                         <h5>Client Served</h5>
                    </div>
               </div>
               <div class="col-6 col-lg-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1900">
                    <div class="card h-100 home-counter-content">
                         <span>2+</span>
                         <h5>Achievements</h5>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 5.Fun Fatcs Section End Here -->

<!-- 6.CTA Section Start Here -->
<section class="home-cta cta-bg" style="background-image:url('assets/images/common/cta-bg.png');
background-image:url('assets/images/common/cta-bg.webp')">
     <div class="container">
          <div class="row">
               <div class="col-lg-8" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1600">
                    <h2>
                         Want Some Kickass<br>
                         Tips and Tricks? </h2>
               </div>
               <div class="col-lg-4 align-self-center pt-4 pt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1600">
                    <a href="tips-tricks.php" class="main-btn cta-btn">
                         Know More
                    </a>
               </div>
          </div>
     </div>
</section>
<!-- 6.CTA Section End Here -->

<!-- 7.Journey Section Start Here -->
<section class="aboutme-journey">
     <div class="container">
          <div class="row ">
               <div class="col-12 text-center ">
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                         <h3 class="sub-title">View My history</h3>
                         <h2 class="title title-center">My Journey</h2>
                    </div>
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
                         <p>My core objective is to work in an environment where ‘learning’ is a continuous process and where there would be ample of scope to grow and enhance my knowledge. I seek challenging opportunities in the Digital Industry wherein my skills and ability can be effectively utilized to achieve the desired goal of the organization.
                         </p>
                    </div>
               </div>
               <div class="col-12">
                    <div class="aboutme-journey-content">
                         <ul class="aboutme-timeline">
                              <li data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                                   <div class="aboutme-timeline-badge">2019-20</div>
                                   <div class="aboutme-timeline-panel">
                                        <div class="aboutme-timeline-heading">
                                             <h4 class="aboutme-timeline-title">Flying Cursor Interactive - Jr.Web Developer
                                             </h4>
                                        </div>
                                        <div class="aboutme-timeline-body">
                                             <ul>
                                                  <li>Managed website development projects for well renowned brands</li>
                                                  <li>Optimized websites for all cross-browser and multi-platform compatibility</li>
                                                  <li>Worked closely with the design team to meet project requirements, goals, and desired functionality</li>
                                                  <li>Developed and integrated customized themes into WordPress platform</li>
                                                  <li>Enhanced user experience and accomplished webpage objectives by creating site structure, navigation, page optimization, and graphics integration</li>
                                                  <li>Implemented enhancements that improved web functionality and responsiveness</li>
                                             </ul>
                                        </div>
                                   </div>
                              </li>
                              <li class="aboutme-timeline-inverted" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000">
                                   <div class="aboutme-timeline-badge warning">
                                        2020-21
                                   </div>
                                   <div class="aboutme-timeline-panel">
                                        <div class="aboutme-timeline-heading">
                                             <h4 class="aboutme-timeline-title">Indian Institute of Digital Education - Jr.Web Developer
                                             </h4>
                                        </div>
                                        <div class="aboutme-timeline-body">
                                             <ul>
                                                  <li>Designed and maintained organizations web assets using frontend languages and content management systems including WordPress</li>
                                                  <li>Developed multiple landing pages for Ad campaigns</li>
                                                  <li>Optimized webpages for page speed performance</li>
                                                  <li>Implemented SEO changes on the website &amp; blog</li>
                                             </ul>
                                        </div>
                                   </div>
                              </li>
                              <li data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                                   <div class="aboutme-timeline-badge danger">2021-22</div>
                                   <div class="aboutme-timeline-panel">
                                        <div class="aboutme-timeline-heading">
                                             <h4 class="aboutme-timeline-title">Pulse Solutions - Web Designer
                                             </h4>
                                        </div>
                                        <div class="aboutme-timeline-body">
                                             <ul>
                                                  <li>Managed website development projects for USA &amp; Australian clients</li>
                                                  <li>Optimized websites for all cross-browser and multi-platform compatibility</li>
                                                  <li>Implemented SEO Technical changes assigned by the SEO Team</li>
                                                  <li>Developed and integrated customized themes into WordPress platform</li>
                                                  <li>Managed website development projects from initial design through completion</li>
                                                  <li>Fixed bugs and implemented enhancements that improved web functionality and user experience</li>
                                             </ul>
                                        </div>
                                   </div>
                              </li>
                              <li class="aboutme-timeline-inverted" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000">
                                   <div class="aboutme-timeline-badge success">
                                        2021-22
                                   </div>
                                   <div class="aboutme-timeline-panel">
                                        <div class="aboutme-timeline-heading">
                                             <h4 class="aboutme-timeline-title">Tonic Worldwide - Web Developer
                                             </h4>
                                        </div>
                                        <div class="aboutme-timeline-body">
                                             <ul>
                                                  <li>Managed website development projects for well renowned brands</li>
                                                  <li>Optimized websites for all cross-browser and multi-platform compatibility</li>
                                                  <li>Worked closely with the design team to meet project requirements, goals, and desired functionality</li>
                                                  <li>Developed and integrated customized themes into WordPress platform and shopify</li>
                                                  <li>Enhanced user experience and accomplished webpage objectives by creating site structure, navigation, page optimization, and graphics integration</li>
                                                  <li>Implemented enhancements that improved web functionality and responsiveness</li>
                                             </ul>
                                        </div>
                                   </div>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- 7.Journey Section End Here -->

<?php
include('contact-form.php');
include('footer.php');
include('files-link.php');
?>