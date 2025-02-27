<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Techo Matrix - A Digital Work Place</title>

        <!-- favicon -->
        <link
            rel="icon"
            href="assets/img/fav icon techo matrix.png"
            sizes="16x16"
            type="image/png"
        />

        <!-- Stylesheet Link -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>


    <body class="t-bg-light-2">
       
        <Preloader>
        <div class="content preloader">
            <div id="inTurnFadingTextG">
                <div id="inTurnFadingTextG_1" class="inTurnFadingTextG"><img src="./assets/img/fav icon techo matrix.png" alt=""></div>
                
            </div>
        </div> 
        </Preloader>


        
        <!-- Header  -->
        <header class="l-header active t-bg-light border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-7 col-lg-3 col-xl-2">
                        <div class="brand">
                            <a href="index.php" class="t-link">
                                <img
                                    src="./assets/img/Techo Matrix Logo.png"
                                    alt="TechoMatrix logo"
                                    class="img-fluid w-100"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col-5 col-lg-9 col-xl-8 text-right">
                        <div class="zol-menu-wrapper">
                            <div
                                class="zol-menu-toggle d-inline-block d-lg-none"
                            >
                                <span class="zol-menu-open">
                                    <i class="las la-bars"></i>
                                </span>
                                <span class="zol-menu-close">
                                    <i class="las la-times"></i>
                                </span>
                            </div>
                            <ul class="t-list zol-menu">


                                <li class="zol-menu__list "
                                    
                                >
                                    <a href="./index.php" class="t-link zol-menu__link"
                                        >Home</a
                                    >

                                
                                <li class="zol-menu__list " >
                                    <a href="service.php" class="t-link zol-menu__link"
                                        >service</a
                                    >
                                 
                                
                                    
                                <li class="zol-menu__list">
                                    <a href="about.php" class="t-link zol-menu__link"
                                        >About Us </a
                                    >
                                <li 
                                class="zol-menu__list zol-menu__current ">
                                    <a
                                        href="contact.php"
                                        class="t-link zol-menu__link"
                                        >contact us</a
                                    >
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 d-none d-xl-block">
                        <a
                            href="tel:+923151128389"
                            class="t-link bttn bttn-sm bttn-round bttn-primary"
                        >
                        +92-315-1128389
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

         <!-- Banner -->
         <div class="zol-banner zol-banner--contact t-pt-150 t-pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1 class="mt-0 t-text-light text-capitalize">Contact Us</h1>
                        <ul class="t-list breadcrumbs d-flex justify-content-center align-items-center"></ul>
                        <button type="button" class="t-link bttn bttn-md bttn-round bttn-primary border-0" 
    data-toggle="modal" data-target="#exampleModal"
    style="background: orange; color: white; padding: 12px 20px; font-size: 16px; border-radius: 6px; border: none; cursor: pointer;">
    Get a Quote
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px; overflow: hidden;">
            <div class="modal-header" style="background: orange; color: white; padding: 15px;">
                <h5 class="modal-title" id="exampleModalLabel">Get A Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                    style="background: transparent; border: none; font-size: 20px; color: white;">
                    &times;
                </button>
            </div>
            <div class="modal-body" style="background: #f9f9f9; padding: 25px;">
                <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                    
                
<form id="quote-form">
    <div style="margin-bottom: 12px;">
        <input type="text" id="q-name" name="name" placeholder="Good Name"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>

    <div style="margin-bottom: 12px;">
        <input type="text" id="q-email" name="email" placeholder="Email Address"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>

    <div style="margin-bottom: 12px;">
        <input type="text" id="q-phone" name="phone" placeholder="Phone Number"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
    </div>

    <div style="margin-bottom: 15px;">
        <textarea id="q-msg" name="message" rows="4" placeholder="How may I assist you?"
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;"></textarea>
    </div>

    
    <div id="form-messages"></div>

    <input type="submit" value="Submit"
        style="width: 100%; padding: 12px; background: orange; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer;">
</form>
                </div>
            </div>
        </div>
    </div>
</div>
            
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Contact  -->
        <div class="t-pt-120 t-pb-150 l-contact l-contact--bg" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 t-mb-50 mb-lg-0">
                        <h2 class="mt-0 text-capitalize" style="color: red;">
                            get in touch
                        </h2>
                        <p class="mb-0">
                            We’d love to hear from you! Whether you have a question, need expert advice, or are ready to start your next big project, our team is here to help. Reach out to us for personalized solutions, and let’s create something amazing together. Contact us today and take the first step toward turning your ideas into reality!
                        </p>
                    </div>
                    
                    <div class="col-lg-6 ">
                        <div class="contact-form contact-form--element t-bg-light">
                            
                            <form id="Contact-form" onsubmit="return validateForm()" >
                                <input
                                    type="text"
                                    name="name"
                                    id="Name"
                                    class="form-control t-mb-15"
                                    placeholder="Enter Your Name"
                                />
                                <input
                                    type="text"
                                    name="mail"
                                    id="mail"
                                    class="form-control t-mb-15"
                                    placeholder="Enter Your Email"
                                />
                                <textarea
                                    name="textarea"
                                    id="textinput"
                                    cols="30"
                                    rows="10"
                                    placeholder="Write your messege"
                                    class="form-control t-mb-15"
                                ></textarea>
                                
                                <input
                                    type="submit"
                                    value="Submit"
                                    id="submit-btn"
                                    class="newsletter__button bttn bttn-round bttn-alpha bttn-md text-uppercase border-0 w-100 text-center"
                                />
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact End -->
                                    
                                
                           
                        

        <div class="t-pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="cards border">
                            <div class="cards__img mx-auto text-center">
                                <img src="assets/img/contact-icon-1.png" alt="Techo Matrix" class="img-fluid">
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Office Location
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    Building # C 245, Block 10, Federal B Area (Gulberg), Karachi, Pakistan
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a href="about.php" class="t-link t-link--alpha">
                                    <span class="cards__footer-icon">
                                        <i class="las la-plus-circle"></i>
                                    </span>
                                    <span class="text-capitalize font-weight-bold">
                                        read more
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="cards border">
                            <div class="cards__img mx-auto text-center">
                                <img src="assets/img/contact-icon-2.png" alt="Techo Matrix" class="img-fluid">
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Working Hours <br><br>
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    Mon to Fri: 24 hours
                                    
                                
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a href="about.php" class="t-link t-link--alpha">
                                    <span class="cards__footer-icon">
                                        <i class="las la-plus-circle"></i>
                                    </span>
                                    <span class="text-capitalize font-weight-bold">
                                        read more
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0">
                        <div class="cards border">
                            <div class="cards__img mx-auto text-center">
                                <img src="assets/img/contact-icon-1.png" alt="Techo Matrix" class="img-fluid">
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Hotline Support
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    +92-315-1128389
                                    <br>
                                    contact@techomatrix.com
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a href="about.php" class="t-link t-link--alpha">
                                    <span class="cards__footer-icon">
                                        <i class="las la-plus-circle"></i>
                                    </span>
                                    <span class="text-capitalize font-weight-bold">
                                        read more
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back To Top -->
        <div class="back-to-top">
            <span class="back-top">
                <i class="las la-angle-up"></i>
            </span>
        </div>
        <!-- Back To Top End -->

          <!-- Footer  -->
          <footer class="footer-style-2">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 t-mb-30 mb-lg-0">
                            <div class="brand mx-auto mx-lg-0">
                                <a href="index.php" class="t-link">
                                    <img
                                        src="assets/img/Techo Matrix Logo.png"
                                        alt="Techo Matrix"
                                        class="img-fluid w-100"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-top__nav">
                                <ul class="t-list footer-top__list">
                                    <li class="footer-top__list-item">
                                        <a href="index.php" class="t-link footer-top__link text-uppercase sm-text">
                                            Home
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="service.php" class="t-link footer-top__link text-uppercase sm-text">
                                            Service
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="about.php" class="t-link footer-top__link text-uppercase sm-text">
                                            About Us 
                                        </a>
                                    </li>
                                    <li class="footer-top__list-item">
                                        <a href="#" class="t-link footer-top__link text-uppercase sm-text">
                                            Contact Us 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom t-pt-30 t-pb-30 t-bg-theta" style="background-color: orange;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div
                            class="col-md-4 t-mb-15 mb-md-0 text-center text-md-left t-text-light sm-text"
                        >
                            &copy; 2020
                            <a href="#" class="t-link t-link-alpha">Techo Matrix</a>
                                All Rights Reserved.
                        </div>
                        <div
                            class="col-md-4 t-mb-15 mb-md-0 text-center t-text-light sm-text"
                        >
                        Developed by 
                            <a href="#" class="t-link t-link-alpha">
                                <i class="las la-heart"></i>
                            </a>
                            Sohaib Saleem
                        </div>
                        <div class="col-md-4">
                            <ul
                                class="t-list social-list justify-content-center justify-content-md-end"
                            >
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a
                                        href="#"
                                        class="t-link social-icon-light social-icon-light--hover"
                                    >
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- jquery -->
        <script src="assets/js/jquery.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Slick Slider  -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Nice Select  -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Owl carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Popup  -->
        <script src="assets/js/magnafic-popup.js"></script>
        <!-- Animation on Scroll  -->
        <script src="assets/js/sal.js"></script>
        <!-- Main script -->
        <script src="assets/js/main.js"></script>
        <!-- Form Validation -->
        <script src="assets/js/FormValidation.js"></script>
          <!-- Quote Validation -->
        <script src="assets/js/quote-form-validation.js"></script>
    </body>

</html>
