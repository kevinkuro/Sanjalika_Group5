<?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        echo "<script>
            alert('Please login to entry !');
            window.location.href = 'Login.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sanjalika, form everfollows function, We&amp;apos;d Love to Hear From You">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Aboutus</title>
    <link rel="stylesheet" href="./css/AboutUs/styles.css" media="screen">
    <link rel="stylesheet" href="./css/AboutUs/style2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.4.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|PT+Sans:400,400i,700,700i|PT+Sans+Caption:400,700"> 
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="Home.css" class="">
    <style>
     
   
    .box {
float: left;
padding: 1.5em 1em;
width: 25%;
height: 400px;
border-top: .1em solid $lightGrey;
border-bottom: .1em solid $lightGrey;
border-left: .1em solid $lightGrey;
@include transition(background);
&:focus,
&:hover {background: #f5f5f5;}
}

</style>
<div class="main">

<header>
            <div class="header__contain container">
                <a href="./Home.php" class="logo">Sanjalika</a>
                <div class="header__main">
                    <ul id="main_menu" >
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">HomePage</a>
                            <div class="dropdown-content">
                                <a href="Home.php" class="drop">Home</a>
                                <a href="./food.php" class="drop">Menu and Dishes</a>
                                <a href="about.php" class="drop">About</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">Service</a>
                            <div class="dropdown-content">
                                <a href="ticket.php" class="drop">Ticket</a>
                                <a href="#" class="drop">Link 2</a>
                                <a href="#" class="drop">Link 3</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">News</a>
                            <div class="dropdown-content">
                                <a href="#" class="drop">Link 1</a>
                                <a href="#" class="drop">Link 2</a>
                                <a href="./contact.php" class="drop">Contact</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn"><?= isset($_SESSION['is_login']) ? 'Hi, ' . $_SESSION['name'] : 'Login' ?></a>
                            <div class="dropdown-content">
                                <?php if (!isset($_SESSION['is_login'])): ?>
                                    <a href="./login.php" class="drop">Login</a>
                                <?php else: ?>
                                    <a href="./logout.php" class="drop">Logout</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <button class="btnticker"><a href="" class="linkbtn">TICKER</a></button>
                    </div>
                </div>
        </header>
</div>


<link rel="stylesheet" href="Home.css" class="" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="./css/owl.carousel.min.css" />
<link rel="stylesheet" href="./css/owl.theme.default.min.css" />

<!-- javascript -->

<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<script src="./js/owl.carousel.min.js"></script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<script src="./js/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
      AOS.init();
      </script>
  <script src="./js/Home/Home.js"></script>
  </head>
  <body class="u-body u-xl-mode">
    <section class="u-clearfix u-image u-section-1" id="carousel_49ca" data-image-width="1200" data-image-height="684">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
            <div class="u-flip-horizontal u-shape u-shape-svg u-text-grey-60 u-shape-1">
              <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-db41"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-db41" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
            </div>
            <h2 class="u-hover-feature u-text u-text-1">Sanjalika</h2>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="carousel_f373">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h1 class="u-text u-title u-text-1">Sanjalika Water Park&nbsp;</h1>
            <p class="u-custom-font u-font-pt-sans u-text u-text-2">A pinnacle of amusement excitement and endless joys!</p>
            <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <p class="u-custom-font u-font-pt-sans u-text u-text-3"> Spanning 214ha in total, Sanjalika Water Park is world-class amusement and recreational complex that consists of two main areas: The Coastal Amusement Park and Amusement Park on Ba Deo Hill, which are connected together with a unique cabe car system.<br>The Sanjalika Water Park is a brainchild of Sanjalika Group, one of the top-notch companies in investment and operation of amusement and recreational compounds, which have carved their marks through Sanjalika Ba Na Hills, Sanjalika Danang Wonders or Sanjalika Fansipan Legend...Given the experiences and prestige of Sanjalika, Sanjalika Water Park is excepted to become a top and ideal destination.<br>Let's get east for the unlimited Sanjalika Water Park, including two major compounds connected
    together with a unique cable car system:
    The Coastal Amusement Park on scenic Bai Chay Beach spans up to 169ha and consists of
    various attractive facillities such as the Dragon Park - an extreme game zone and the most
    spectacular roller coaster of Vietnam; an exciting Typhoon Water Park called the Tornado Bay;
    and the unwinding coast of Ha Long, encircled with the sapphire water and silky white sandy
    beach.
    A sea-crossing cable car system stretching 2km carries passengers to Ba Deo Amusement Park,
    a complex of exciting games and most delightful amusement facillities. Some must-visits on Ba
    Deo Hill include the Zen Garden, indoor game zone The Mysterious Castle and in particular the 
    Sun Wheel, one of the tallest Ferris wheels of the world.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle u-section-3" id="carousel_bfd9">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-image-width="564" data-image-height="846">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-align-left u-container-style u-image u-layout-cell u-size-20 u-image-2" data-image-width="480" data-image-height="681">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
            <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3" data-image-width="563" data-image-height="692">
              <div class="u-container-layout u-container-layout-3"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-4-light-2 u-section-4" id="carousel_affa">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-xs u-container-layout-1">
                  <h2 class="u-subtitle u-text u-text-1"> Experience</h2>
                  <h6 class="u-text u-text-2">With the experience in the entertainment industry, Sanjalika will satisfy you.</h6>
                  <a href="https://nicepage.dev" class="u-active-black u-border-1 u-border-black u-btn u-button-style u-hover-black u-none u-text-active-white u-text-black u-text-hover-white u-btn-1"><span class="u-icon"></span>&nbsp;Ticket&nbsp;<span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="-16 0 384 384" style="width: 1em; height: 1em;"><path d="m256 0h-256v384h32v-352h192v96h96v256h32v-302.625l-81.375-81.375zm64 96h-64v-64h1.375l62.625 62.625zm0 0"></path><path d="m68.808594 254.832031 196.457031-46.222656-127.121094-115.554687zm129.933594-63.441406-75.542969 17.777344 26.664062-62.214844zm0 0"></path><path d="m64 288h224v32h-224zm0 0"></path><path d="m64 352h176v32h-176zm0 0"></path></svg><img></span>
                  </a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <ul class="u-custom-list u-text u-text-3">
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;"> Dragon Park<br>
                      </span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Water Park<br>
                      </span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Queen Cable Cars&nbsp;</span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">The Mysterious Hills<br>
                      </span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Sanjalika Beach</span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Sanjalika Lighthouse</span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Sanjalika Old Quarter Kiosks</span>
                    </li>
                    <li>
                      <div class="u-list-icon">
                        <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">—</div>
                      </div>
                      <span style="font-size: 1.25rem;">Food &amp; Shopping</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-shape-rectangle u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom u-container-layout-3">
                  <img class="u-expanded-width u-hover-feature u-image u-image-default u-image-1" src="images/tixung1.jpg" alt="" data-image-width="275" data-image-height="183" data-animation-name="fadeIn" data-animation-duration="2000" data-animation-direction="Up" data-animation-delay="500">
                  <img class="u-expanded-width u-hover-feature u-image u-image-default u-image-2" src="images/tixung.jpg" alt="" data-image-width="300" data-image-height="168" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Up">
                  <img class="u-expanded-width u-hover-feature u-image u-image-default u-image-3" src="images/tixung2.jpg" alt="" data-image-width="259" data-image-height="194" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Up">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
    </section>
    <section class="u-align-left u-clearfix u-gradient u-section-5" id="carousel_d1e0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-1">We'd Love to Hear From You</h1>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form">
            <div class="u-form-group u-form-name u-form-partition-factor-3 u-form-group-1">
              <label for="name-d70e" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-d70e" name="name" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-address u-form-group u-form-partition-factor-3 u-form-group-2">
              <label for="address-2127" class="u-form-control-hidden u-label">Address</label>
              <input type="text" placeholder="Enter your address" id="address-2127" name="address" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group u-form-partition-factor-3 u-form-group-3">
              <label for="email-d70e" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="email-d70e" name="email" class="u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message u-form-group-4">
              <label for="message-d70e" class="u-form-control-hidden u-label">Message</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-d70e" name="message" class="u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-form-agree u-form-group u-form-group-5">
              <input type="checkbox" id="agree-be5a" name="agree" class="u-agree-checkbox" required="">
              <label for="agree-be5a" class="u-label">I accept the <a href="#">Terms of Service</a>
              </label>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-form-group-6">
              <a href="#" class="u-btn u-btn-submit u-button-style u-hover-grey-25 u-white u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
  </body>
</html>