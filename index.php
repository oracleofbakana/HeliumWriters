<!DOCTYPE html>
<?php 
require("includes/helium_libs.php"); 
$notification = $bon->ContactUs();
//echo $notification;exit();
?>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167975838-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167975838-1');
</script>

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Helium Writers - We Create It A Duty To Tell Your Story</title>
<meta name="description" content="Helium Writers - We Create It A Duty To Tell Your Story.">
<meta name="author" content="heliumwriters.com">

<!-- Web Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/all.css" />

<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />

<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">

<!-- Preloader -->
<div class="preloader">
  <!-- <div data-loader="dual-ring"></div> -->
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Slideshow Intro
    ============================================= -->
  <section id="home" class="owl-carousel owl-theme single-slideshow bg-white" data-autoplay="true" data-loop="true" data-nav="true" data-items="1">
    <div class="item">
      <div class="hero-wrap" >
        <div class="hero-mask opacity-8 kenburns-top yellow-dark"></div>
		<!-- images/bg/image-8.jpg -->
        <div class="hero-bg kenburns-top" style="background-image:url('images/bg_1.jpg');"></div>
        <div class="hero-content d-flex flex-column fullscreen" >
          <div class="container pt-5 mt-5 text-center "> <img class="img-fluid d-inline-block  logo_tp" src="images/helium_black.png" alt="Helium Writers" style="" /> </div>
          <div class="container my-auto" >
            <div class="row">
              <div class="col-md-9 mx-auto text-center">
                <br>
                <p class="text-7 text-white scale-in-top" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive; ">our culture is writing</p>
                <div class="row">
                  <div class="col-auto mx-auto"> <span class="border-bottom border-top py-1 border-primary border-1 d-block"></span>
                    <h2 class="text-16 font-weight-600 text-white text-uppercase mb-0 black_text " style="">We Write, You Fame It.</h2>
                    <span class="border-bottom border-top py-1 border-primary border-1 d-block"></span> </div>
                </div>
                <p class="lead text-white mt-3 mb-0"></p>
              </div>
            </div>
          </div>
          <div class="container pb-5 mb-5 mt-3 text-center"> <a href="#about" class="btn btn-primary rounded-pill text-1 px-3 smooth-scroll heartbeat" style="background-color: #ffffff; border: none"><i class="fa fa-chevron-down" style="font-size: 25px; color: #000000"></i></a> </div>
        </div>
      </div>
    </div>
     
    <div class="item">
      <div class="hero-wrap">
        <div class="hero-mask opacity-4 bg-light"></div>
        <div class="hero-bg kenburns-top" style="background-image:url('images/bg_10.jpg');"></div>
        <div class="hero-content d-flex flex-column fullscreen">
            <div class="container my-auto">
                <div class="row">
                  <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-wrap shadow-lg p-5 ">
                      <div class="hero-mask  bg-yellow shadow-lg "></div>
                      <div class="hero-content slide-fwd-center ">
                        <h2 class="text-16 font-weight-600 text-white mb-0 black_text scale-in-top">Save Your Time & Outsource Your Writing Job To Us.</h2><br><br>
                        <a href="#contact" class="btn btn-primary rounded-pill text-uppercase smooth-scroll" style="background-color: #ffffff; color: #000000">CONTACT US</a> 
                      </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5 mb-2 text-center"> <a href="#about" class="btn btn-primary rounded-pill text-1 px-3 smooth-scroll heartbeat" style="background-color: #f28021; border: none"><i class="fa fa-chevron-down" style="font-size: 25px; color: #ffffff"></i></a> </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Slideshow Intro end --> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg text-uppercase font-weight-500">
      <div class="container" style="padding: 15px 15px"> 
        <!-- Logo --> 
        <a class="logo ml-3 ml-md-0" href="index.html" title="Doon"> <img src="images/helium_black.png" alt="Helium Writers" style="width: 100%; max-width: 200px; margin: 0px auto" /> </a> 
        <!-- Logo End -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
        <div id="header-nav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#works">How it works</a></li>
            <li class="align-items-center h-auto ml-lg-3"><a href="#contact" class="nav-link btn btn-outline-dark shadow-none d-inline-block rounded-pill mt-3 mt-lg-0 smooth-scroll" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive;  ">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" role="main"> 
    
      <!-- About
    ============================================= -->
    <section id="about" class="section hero-wrap bg-white">
        <div class="hero-mask  opacity-1 bg-white"></div>
        <div class="hero-bg opacity-7" style="background-image:url('images/world_map_4.png'); background-repeat: no-repeat;"></div>
        <div class="container px-lg-4 px-xl-5 ">
            <div class="row">
              <div class="col-lg-10 mx-auto text-center scale-in-top">
                <h1 class="text-center font-weight-600 line-height-4 mb-4 mx-lg-5 black_text" ><span style="color: #f28021;font-family: 'Fredoka One', Poppins, sans-serif, cursive;  ">Hello!</span><br>We are HELIUM WRITERS.</h1>
                <p class="lead black_text">Is your business in need of quality content creation that will grab your reader’s attention and 
                make them take notice of your business? Do you need content that is grammatically correct and guaranteed 100% original?</p>
                <p class="lead black_text">Helium Writers is your number one source for the content you need, 
                the service you want and competitive prices you can afford. </p>

                <?php //include("includes/about-stats.php"); ?>

              </div>
            </div>
            <div class="row mt-4" style="width: 100%; max-width: 900px; margin: 0 auto">
              <div class="col-md-6 col-lg-6">
                <div class="featured-box style-1 mb-4">
                  <div class="featured-box-icon black_text"> <i class="far fa-thumbs-up"></i></div>
                  <h3 class="text_yellow">Mission Statement</h3>
                  <p class="lead text-4">Our mission is to be an unrivalled industry leader by providing quality contents to our customers.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="featured-box style-1 mb-4">
                  <div class="featured-box-icon black_text"> <i class="fa fa-award"></i> </div>
                  <h3 class="text_yellow">Our Writing Guarantee</h3>
                  <p class="lead text-4">We guarantee originality, intriguing, informational and free from grammatical errors contents upon delivery.</p>
                </div>
              </div>
            </div>
        </div>
    </section>
    
    <!-- About end -->
    
    <section class="section">
      <div class="container">
        <h1 class="text-center font-weight-600 mb-3" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive; ">Why Trust Us With Your Job?</h1>
        <hr class="heading-separator-line border-primary border-2 d-block mx-auto mb-5">
        <div class="row scale-up-hor-center">
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box px-2">
              <div class="featured-box-icon text-light border-bottom"><span class="w-100 text-20 font-weight-500">01.</span></div>
              <h3 class="font-weight-600 mb-3">We Are Seasoned Writing Experts</h3>
              <p class="text-3 black_text font_300">You couldn't find any better. With years of experience, we bring professionalism into the game.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box px-2">
              <div class="featured-box-icon text-light border-bottom"><span class="w-100 text-20 font-weight-500">02.</span></div>
              <h3 class="font-weight-600 mb-3">Less Stress, Optimum Results</h3>
              <p class="text-3 black_text font_300">Our major concern is to ensure that you don't get weighed down from the burden of writing and
						 produce excellent results. If it's yours, it's ours.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box px-2">
              <div class="featured-box-icon text-light border-bottom"><span class="w-100 text-20 font-weight-500">03.</span></div>
                <h3 class="font-weight-600 mb-3">Up-to-Date Information On Your Work</h3>
                <p class="text-3 black_text font_300">
                    We value each client and put your interests first. That's the reason we keep you updated on the progress of your work.
                </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="featured-box px-2">
              <div class="featured-box-icon text-light border-bottom"><span class="w-100 text-20 font-weight-500">04.</span></div>
              <h3 class="font-weight-600 mb-3">Affordable Pricing Plan</h3>
              <p class="text-3 black_text font_300 ">Here at Helium Writers, we offer our best services without breaking your bank. 
							Our services are premium with affordable price plan. </p>
            </div>
          </div>
        </div>
        
        <!-- Clients
    ============================================= -->
       <?php //include("includes/clients.php");?>
        <!-- Clients end --> 
        
      </div>
    </section>
    
     <!--   Services
    ============================================= -->
    <section id="services" class="ssection hero-wrap yellow-dark ">
        <div class="hero-mask opacity-5 "></div>
        <div class="hero-bg yellow-dark opacity-5 " style="background-image:url('images/bg_1.jpg');"></div>
      <div class="container " style="padding-top: 80px; padding-bottom: 90px ">
        <h1 class="text-13 black_text font-weight-600 text-center w-100 mb-5 opacity-9" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive; ">Our Services</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-4 ">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4 "> 
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-globe"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Web Content Writing</strong></p>

                    <p class="text-3 black_text">Let's capture your audience and give you advantage over your competitors with the perfect website content.</p>
                  
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fas fa-users"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Social Media Writing</strong></p>

                    <p class="text-3 black_text">We know how difficult coming up with regular contents to update your followers. Let's draft your social media calendar to captivate your audience.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-blog"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Blog Writing</strong></p>

                    <p class="text-3 black_text">Sites with regularly updated blog are ten times likely to rank higher in Google. Let's increase your visibility by doing your blog writing.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4"> 
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-copy"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Essay Writing</strong></p>

                    <p class="text-3 black_text">Writing essay can be a heinous task. We take the headache off that essay and perfectly letter it to your choice of study.</p>
                  
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-microphone"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Speech Writing</strong></p>

                    <p class="text-3 black_text">Writing your speech could serve as a punishment. Let's deliver to you an Obama-esque speech.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-newspaper"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Article Writing</strong></p>

                    <p class="text-3 black_text">For your magazines, tabloids, pamphlets and programmes, we script it on the perfect topic.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4"> 
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-briefcase"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Business Plan Writing</strong></p>

                    <p class="text-3 black_text">Business plans are the heart of any business. For that perfect business proposals and presentations, we are a click away.</p>
                  
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-edit"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Editing</strong></p>

                    <p class="text-3 black_text">We dot the i's and cross the t's you missed. Let's edit your work into a perfect masterpiece.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-book"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Book Ghostwriting</strong></p>

                    <p class="text-3 black_text">You don't have to give up on your book idea because of writer's block or time. We are here to pass the message on your behalf.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4"> 
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-book-open"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Book Review</strong></p>

                    <p class="text-3 black_text">Putting out some parts of that book, refined in the most beautiful way to stir up your readers without spoiling them.</p>
                  
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fab fa-teamspeak"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Consulting</strong></p>

                    <p class="text-3 black_text">We offer consulting services to our clients for an in-depth interactive session where we can guide you to achieve your writing desires.
                    </p>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column h-100 bg-white shadow-lg rounded-lg p-4">
                    <span class="text-9 text_yellow opacity-8"><i class="fa fa-chalkboard-teacher"></i></span>
                    <p class=" mb-0 text-5 black_text"><strong class="d-block font-weight-500">Training</strong></p>

                    <p class="text-3 black_text">To ensure there is a thriving ecosystem of writers, we conduct trainings, seminars, workshops and campus reach-out programmes where we watch for the younger folks.
                    </p>
                  </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Testimonial end --> 
    

    <!-- Process
    ============================================= -->
    <section id="works" class="section hero-wrap bg-white">
        <div class="hero-mask  opacity-1 bg-white"></div>
        <div class="hero-bg opacity-7" style="background-image:url('images/world_map_4.png'); background-repeat: no-repeat;"></div>
            <div class="container px-lg-4 px-xl-5">
                <h2 class="text-center font-weight-600 text-uppercase black_text mb-3" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive; ">How It Works</h2>
                <p class="text-5 text-center mb-5 black_text">
                    Delivering work within time and budget which meets client’s requirements is our motto.
                </p>
                <div class="workflow">
                    <div class="row">
                        <div class="col-sm-6 workflow-item">
                          <div class="workflow-icon shadow-lg mx-auto mr-sm-4 mr-lg-5"> <span class="my-auto text-16 font-weight-500 text-primary">01</span> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mx-sm-4 mx-lg-5 text-center text-sm-left mt-4 mt-sm-0">
                                <h3 class="black_text">Consultation</h3>
                                <p class="text-4 black_text font_300">At this point, you request a quote, and we assign a professional to you to start discussing your ideas to understand your aims and objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-sm-5">
                        <div class="col-sm-6 workflow-item text-left order-sm-1">
                          <div class="workflow-icon shadow-lg mx-auto ml-sm-4 ml-sm-5"> <span class="my-auto text-16 font-weight-500 text-primary">02</span> </div>
                        </div>
                        <div class="col-sm-6 text-right order-sm-0">
                            <div class="mx-sm-4 mx-lg-5 text-center text-sm-right mt-4 mt-sm-0">
                                <h3 class="black_text">Brainstorming and Development</h3>
                                <p class="text-4 black_text font_300">We listen to your ideas and proceed to our writing room to provide a clarity work to 
                                  your work. We do this so we clearly understand your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-sm-5">
                        <div class="col-sm-6 workflow-item">
                          <div class="workflow-icon shadow-lg mx-auto mr-sm-4 mr-lg-5"> <span class="my-auto text-16 font-weight-500 text-primary">03</span> </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mx-sm-4 mx-lg-5 text-center text-sm-left mt-4 mt-sm-0">
                            <h3 class="black_text">Design</h3> 
                            <p class="text-4 black_text font_300">We work with you to provide a structure for your work and also a project milestone.</p>
                          </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-sm-5">
                        <div class="col-sm-6 workflow-item text-left order-sm-1">
                           <div class="workflow-icon shadow-lg mx-auto ml-sm-4 ml-sm-5"> <span class="my-auto text-16 font-weight-500 text-primary">04</span> </div>
                        </div>
                        <div class="col-sm-6 text-right order-sm-0">
                          <div class="mx-sm-4 mx-lg-5 text-center text-sm-right mt-4 mt-sm-0">
                            <h3 class="black_text">Implementation</h3>
                            <p class="text-4 black_text font_300">At this stage, you are good to go for publishing. 
                              However, if you are not conversant with publishing and marketing your book. We can help you to achieve this.</p>
                          </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-sm-5">
                        <div class="col-sm-6 workflow-item">
                          <div class="workflow-icon shadow-lg mx-auto mr-sm-4 mr-lg-5"> <span class="my-auto text-16 font-weight-500 text-primary">05</span> </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mx-sm-4 mx-lg-5 text-center text-sm-left mt-4 mt-sm-0">
                            <h3 class="black_text">Proofreading</h3>
                            <p class="text-4 black_text font_300">Because we want to deliver an authentic work, we ensure it passes through our editors, proofreaders and plagiarism system. </p>
                          </div>
                        </div>
                    </div>
                    <div class="row mt-4 mt-sm-5">
                        <div class="col-sm-6 workflow-item text-left order-sm-1">
                           <div class="workflow-icon shadow-lg mx-auto ml-sm-4 ml-sm-5"> <span class="my-auto text-16 font-weight-500 text-primary">06</span> </div>
                        </div>
                        <div class="col-sm-6 text-right order-sm-0">
                          <div class="mx-sm-4 mx-lg-5 text-center text-sm-right mt-4 mt-sm-0">
                            <h3 class="black_text">Delivery</h3>
                            <p class="text-4 black_text font_300">You are good for publishing. However, if you are not conversant with publishing and marketing your book. We can help you to achieve this.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    <!-- Process end --> 
    <!-- Promo Box -->
    <!-- <section class="section bg_red text-center">
      <div class="container">
        <div class="d-lg-flex text-center text-lg-left align-items-center justify-content-center">
          <h2 class="text-9 mb-4 mb-lg-0 mr-2 text-white">Have Any Project On Your Mind?</h2>
          <a href="#contact" class="btn btn-primary rounded-pill shadow-none smooth-scroll mx-3">Let's Discuss</a> </div>
      </div>
    </section> -->
    <!-- Promo Box end --> 
   
    
    <!-- Contact
    ============================================= -->
    <section id="contact" class="section hero-wrap bg-white">
      <div class="hero-mask opacity-9 bg-dark"></div>
      <div class="hero-bg opacity-9" style="background-image:url('images/bg_9.jpg');"></div>
      <div class="hero-content">
        <div class="container">
          <div class="border border-2 p-1">
            <div class="border border-2 p-5">
              <div class="row">
                <div class="col-xl-10 mx-auto text-center">
                  <p class="lead text_yellow mb-1" style="font-family: 'Fredoka One', Poppins, sans-serif, cursive; ">Send Us A Message</p>
                  <h2 class="text-10 font-weight-400 text-white line-height-3 mb-5">Let’s get started on your project today!</h2>
                </div>
              </div>
              <div class="row">
			  <?php echo $notification; ?>
                <div class="col-lg-5 col-xl-6 align-self-center">
                  <form id="contact_form" class="form-border form-border-light" method="post">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" required placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" required placeholder="Email">
                    </div> 
					<div class="form-group">
                      <input name="subject" type="text" class="form-control" required placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea name="message" class="form-control" rows="3" required placeholder="Tell us more about your needs........"></textarea>
                    </div>
                    <p class="text-center mt-5 mb-0">
                      <button id="submit-btn" class="btn btn-secondary rounded-pill d-inline-flex bg-yellow" style="border: none" type="submit">Send Message</button>
                    </p>
					<input type="hidden" name="contact_form">
                  </form>
                </div>
                <div class="col-lg-7 col-xl-6 align-self-center mt-5 mt-lg-0">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="featured-box text-center my-3">
                        <div class="featured-box-icon text-white"> <i class="fas fa-map-marker-alt" ></i></div>
                        <h3 class="text-4 text-white text-uppercase font-weight-400">Visit us</h3>
                        <p class="text-light mb-0 text-3 " style="color: #ffffff!important">28B Lifeline Road,<br>
                           Amike-Aba, Abakaliki, Ebonyi State </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="featured-box text-center my-3">
                        <div class="featured-box-icon text-white"> <i class="fas fa-phone-alt"></i> </div>
                        <h3 class="text-4 text-white text-uppercase font-weight-400">Call Us Now</h3>
                        <p class="text-light mb-0 text-3"><a href="tel:+2349055231805" style="color: #ffffff">(+234) 905 180 5523</a><br><a href="tel:+2349055231805" style="color: #ffffff"> (+234) 805 479 1945 </a></p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="featured-box text-center my-3">
                        <div class="featured-box-icon text-white"> <i class="fas fa-envelope" ></i> </div>
                        <h3 class="text-4 text-white text-uppercase font-weight-400">Enquiries</h3>
                        <p class="text-light mb-0 text-3"><a class="text-light" href="mailto:hello@heliumwriters.com" style="color: #ffffff!important">hello@heliumwriters.com</a><br>
                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="featured-box text-center my-3">
                        <div class="featured-box-icon text-white"> <i class="fas fa-clock"></i> </div>
                        <h3 class="text-4 text-white text-uppercase font-weight-400">Business Hours</h3>
                        <p class="text-light mb-0 text-3" style="color: #ffffff!important">Mon to Sat (8am – 6pm)</p>
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
    
    <!-- Contact Us end --> 
    
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <footer id="footer" class="section bg-dark footer-text-light py-5 py-lg-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <p class="mb-0">© <?php echo date('Y'); ?> Helium Writers . All Rights Reserved. Designed by <a href = "http://www.bonjourdapper.com"> Bonjour Dapper</a></p>
        </div>
        <!--<div class="col-lg-4 align-self-center">
          <ul class="nav justify-content-center my-3 my-lg-0">
            <!--<li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#terms-policy" href="#">Terms &amp; Policy</a></li> -->
            <!--<li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#disclaimer" href="#">Disclaimer</a></li>
          </ul>
        </div> -->
        <div class="col-lg-6 align-self-end">
          <ul class="social-icons social-icons-light justify-content-center justify-content-lg-end mb-n1">
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="https://twitter.com/heliumwriters/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/heliumwriters/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-pinterest"><a data-toggle="tooltip" href="http://www.pinterest.com/heliumwriters/" target="_blank" title="" data-original-title="Pinterest"><i class="fab fa-pinterest"></i></a></li>
            <li class="social-icons-whatsapp"><a data-toggle="tooltip" href="http://wa.me/09055231805/" target="_blank" title="" data-original-title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 



<!-- JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Easing --> 
<script src="vendor/jquery-easing/jquery.easing.min.js"></script> 
<!-- Appear --> 
<script src="vendor/jquery.appear/jquery.appear.min.js"></script> 
<!-- Counter --> 
<script src="vendor/jquery.countTo/jquery.countTo.min.js"></script> 
<!-- Parallax Bg --> 
<script src="vendor/parallaxie/parallaxie.min.js"></script> 
<!-- Owl Carousel --> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<!-- isotope Portfolio Filter --> 
<script src="vendor/isotope/isotope.pkgd.min.js"></script> 
<!-- Magnific Popup --> 
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script>
<!-- Custom Script --> 
<script src="js/theme.js"></script>
</body>

</html>