<!DOCTYPE html>
<html lang="en" class="no-js">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Lefa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Lefa Port" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/transition-animations.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-92992662-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{asset('assets/preview/lmpixels-demo-panel.css" type="text/css')}}">
    <!-- /This styles needs for demo -->

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header">
        <div class="my-photo">
          <img src="images/my_photo.jpg"  alt="image">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Lefa Motloung</h1>
          <p class="site-description">Developer, designer & front-end engineer.</p>

        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </header>
      <!-- /Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
          <div class="site-nav mobile-menu-hide">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <!-- About Me Subpage link --> 
              <li>
                <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a><!-- href value = data-id without # of .pt-page -->
              </li>
              <!-- /About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="https://blogwithlefa.blogspot.com/" target="new" data-animation="61" data-goto="4">Blog</a>
              </li>
              <li>
                <a class="pt-trigger" href="#contact" data-animation="62" data-goto="5">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
              <li><a class="tip social-button" href="https://twitter.com/lefofom8" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="https://www.facebook.com/lefa.2017/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="tip social-button" href="https://www.instagram.com/lefofom/" title="Google Plus"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!-- /Social buttons -->
          </div>
          <!-- Navigation & Social buttons -->

          <!-- Subpages -->
          <div class="subpages">
            <!-- About Me Subpage -->
            <section class="pt-page pt-page-1" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">About Me</h2>
                <h5 class="section-description">An Intellectual Badass, Coder, Creative Designer, Network Admin...(Man Utd supporter and all-round nice chap.)</h5>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                  <div class="my-photo-small">
                    <img class="mx-auto rounded-circle" src="{{asset('assets/images/photo_small.jpg" alt="image')}}">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>I am Web Developer / Creative Designer </h3>
                    <p>Since beginning my journey as a web developer at Sci-Bono Discovery Center, I've done Soo Much Work, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and perpetually improving my chops</p>

                    <p>Over the years, I gained a bunch of experience at a local web design agency #Jordiline and decided to turn freelance, and haven't turned back since!</p>

                    <p></p>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Testimonials</h3>
                  </div>
                  <div class="testimonials owl-carousel">

                    <!-- Testimonial 1 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"As crazy as he may be, he loves what he does more than anything. He's a joy to work with."</p>
                        </div>
                      </div>            
                      <!-- /Testimonial Content -->  
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="images/testimonials/testimonial_photo_1.png" alt="">
                        </div>              
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Ratanang Moll</p>
                          <p class="testimonial-firm">Khonology</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->               
                    </div>
                    <!-- End of Testimonial 1 -->

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"I don't remember a day at which a client was unhappy. He is a dedicated individual."</p>
                        </div>
                      </div>            
                      <!-- /Testimonial Content -->  
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="images/testimonials/testimonila_photo_2.png" alt="">
                        </div>              
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Hindy Jorden.</p>
                          <p class="testimonial-firm">Jordiline</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->               
                    </div>
                    <!-- End of Testimonial 2 -->

                    <!-- Testimonial 3 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"Says Lass then necesary, always Keeps me second quessing"</p>
                        </div>
                      </div>
                      <!-- /Testimonial Content -->
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="images/testimonials/testimonila_photo_3.png" alt="">
                        </div>
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Mandla.</p>
                          <p class="testimonial-firm">Scie-Bono ICT Accademy</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->
                    </div>
                    <!-- End of Testimonial 3 -->
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/web_design.png" alt="Responsive Design">
                      <h4>Web Design & Development</h4>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/copywrite.png" alt="Copywriter">
                      <h4>Creative Designer</h4>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/ecommerce.png" alt="E-Commerce">
                      <h4>E-Commerce Shop</h4>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/management.png" alt="Management">
                      <h4>Server & Technical Support</h4>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Clients and Patners</h3>
              </div>

              <div class="row">
                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/1.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/2.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/6.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/4.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/5.png" alt="image"></a>
                  </div>
                </div>
              </div>
              <!-- End of Clients block -->

              <!-- Fun facts block -->
              <div class="block-title">
                <h3>Fun Facts</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-smile"></i>
                    <h4>Happy Clients</h4>
                    <span class="fun-value">100+</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-alarm"></i>
                    <h4>Working Hours</h4>
                    <span class="fun-value">Lost Count</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-medal"></i>
                    <h4>Hackerthons </h4>
                    <span class="fun-value">12</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-coffee"></i>
                    <h4>Coffee Consumed</h4>
                    <span class="fun-value">20,000</span>
                  </div>
                </div>
              </div>
              <!-- End of Fun fucts block -->
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-2" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description">2 Years of Experience</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2015</h5>
                      <h4 class="event-name">BSc IT: Systems Development</h4>
                      <span class="event-description">Richfield Institute of Technology</span>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2018 - 2019 </h5>
                      <h4 class="event-name">CCNA 1/4 & Web Development</h4>
                      <span class="event-description">Sci-Bono ICT Accademy</span>
                    </div>
                    
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Sep 2019 - Current</h5>
                      <h4 class="event-name">Consulatent</h4>
                      <span class="event-description">Bride&Co</span>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jun 2016 - Apr 2018</h5>
                      <h4 class="event-name">Senior PHP Developer</h4>
                      <span class="event-description">Jordiline</span>
                    </div>
                    <!-- 
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Feb 2016 - Mar 2016</h5>
                      <h4 class="event-name">Technical Support (Work Integrated Learning)</h4>
                      <span class="event-description">North West Public Works & Roads</span>
                      <p>A one month program which had to be completed by all final year students in order to graduate.</p>
                    </div>
                  -->
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web Design</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>

                    <h4>Graphic Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div>

                    <h4>IBM Cloud</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>

                    <h4>Networking And Configurations</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Angular</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>ReactJS</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>VueJS</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="#">Download CV</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-3" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">
                            
                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="media">WebSites</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="illustration">Netwerking</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="video">GitHub Projects</a>
                  </li>
                </ul>
                <!-- End of Portfolio filter -->

                <!-- Portfolio Grid -->
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a class="ajax-page-load" href="https://www.enmtrading.co.za
" target="_blank">
                      <img src="images/portfolio/web1.jpg" alt="">
                      <div>
                        <h5 class="name">ENM Trading</h5>
                        <small>Web</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 2 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                      <img src="images/portfolio/2.jpg" alt="">
                      <div>
                        <h5 class="name"> Music Straming App React.Js </h5>
                        <small> Github project</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 2 -->

                  <!-- Portfolio Item 3 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a href="images/portfolio/3.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                      <img src="images/portfolio/3.jpg" alt="">
                      <div>
                        <h5 class="name">OPEN Work Shop</h5>
                        <small>Netwerk Maintanance</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 3 -->

                  <!-- Portfolio Item 4 -->
                  <figure class="item" data-groups='["all", "media"]'>

                    <a class="ajax-page-load" href="https://www.gtsgroup.co.za/">
                      <img src="images/portfolio/web4.jpg" alt="">
                      <div>
                        <h5 class="name">GTS Group</h5>
                        <small>Web Site</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 4 -->

                  <!-- Portfolio Item 5 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a href="images/portfolio/web4.jpg" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                      <img src="images/portfolio/web4.jpg" alt="">
                      <div>
                        <h5 class="name">IBM Cloud Wadson Chatbot</h5>
                        <small>github</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 5 -->

                  <!-- Portfolio Item 6 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="http://www.khonala.co.za/">
                      <img src="images/portfolio/web3.jpg" alt="">
                      <div>
                        <h5 class="name">Khona La SuperMarkets</h5>
                        <small>WebSite</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>

                 

                  <!-- Portfolio Item 10 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a href="IMG_3128.MOV" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                      <img src="images/portfolio/10.jpg" alt="">
                      <div>
                        <h5 class="name">Todo List Vue.js</h5>
                        <small>Github</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 10 -->

                  <!-- Portfolio Item 11 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a href="images/portfolio/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                      <img src="images/portfolio/11.jpg" alt="">
                      <div>
                        <h5 class="name">Sci-Bono Science Center</h5>
                        <small>Server Rooms</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 11 -->

                  <!-- Portfolio Item 12 -->
                  <figure class="item" data-groups='["all","media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/12.jpg" alt="">
                      <div>
                        <h5 class="name">Sihlali Group</h5>
                        <small>Website</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 12 -->
                </div>
                <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->

            </section>
       

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Get in Touch</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>Ready to start your next project with Me? That's great! Give me a call or send me an email and i'll will get back to you as soon as possible!.</p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Gauteng, katlehong</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e0818c8598938d899488a08598818d908c85ce838f8d">lefa@batlou.co.za</a></h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>072 150 6681</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form id="contact-form" method="post" action="https://lmpixels.com/demo/sunshine-demo/sunshine-version-1/sunshine-v1-html-template/contact_form/contact_form.php">

                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                      <input type="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div>
              </div>
                  </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

   

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/bootstrap.min.js"></script>
    <script src="js/page-transition.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/main.js"></script>

    <!-- Demo Color changer Script -->
    <script src="preview/lmpixels-demo-panel.js"></script>
    <!-- /Demo Color changer Script -->
  </body>

<!-- Mirrored from lmpixels.com/demo/sunshine-demo/sunshine-version-1/sunshine-v1-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2019 10:08:26 GMT -->
</html>
                    