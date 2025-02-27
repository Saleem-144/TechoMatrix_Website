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

                                
                                <li class="zol-menu__list zol-menu__current ">
                                    <a href="service.php" class="t-link zol-menu__link"
                                        >service</a
                                    >
                                 
                                
                                    
                                <li class="zol-menu__list">
                                    <a href="about.php" class="t-link zol-menu__link"
                                        >About Us </a
                                    >
                                <li 
                                class= "zol-menu__list">
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

        <!-- Body -->
        <!-- Main Section -->
            <section style="display: flex; align-items: center; justify-content: center; padding: 50px;">
                <div style="flex: 1; text-align: center;">
                    <img src="./assets/img/web Design and Developmengt Logo.png" alt="Web Development Image" style="width: 80%; max-width: 400px; border-radius: 10px;">
                </div>
                <div style="flex: 1; padding: 20px;">
                    <h2 style="text-align: left;">Web Development</h2>
                    <p style="text-align: left;">Techno Matrix is your go-to destination for top-notch web development services. We specialize in creating modern, responsive, and high-performance websites tailored to your business needs. Whether you need a sleek portfolio, a dynamic e-commerce platform, or a custom web application, our expert developers ensure seamless functionality, intuitive user experience, and cutting-edge design. With a focus on innovation and precision, we bring your vision to life with clean code, fast-loading pages, and scalable solutions. Elevate your online presence with Techno Matrix – where technology meets excellence.</p>
                </div>
            </section>
            

            <h2 style="text-align: center;">Reach to Us</h2>
            <!-- Button trigger modal -->
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

                 <!-- Project Showcase -->
        <section class="t-pt-120 t-bg-light" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-7">
                        <div class="text-center">
                            <h2 class="text-capitalize mt-0">
                                How we work
                                
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row t-mt-70" data-sal="slide-down" data-sal-duration="1300">
                    <div class="col-md-4 t-mb-30 mb-md-0" >
                        <div class="cards border">
                            <div class="cards__img mx-auto">
                                <img
                                    src="assets/img/Stratergic Analysis.png"
                                    alt="Techo Matrix"
                                    class="img-fluid w-100"
                                />
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Stratergic Analysis 
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    Strategic analysis evaluates internal and external factors to drive informed decision-making.                    
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a
                                    href="portfolio.html"
                                    class="t-link t-link--alpha"
                                >
                                
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0" >
                        <div class="cards border">
                            <div class="cards__img mx-auto">
                                <img
                                    src="assets/img/showcase-icon-6.png"
                                    alt="Techo Matrix"
                                    class="img-fluid w-100"
                                />
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Planning & Design
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    Planning and design lay the foundation for efficient, 
                                    user-centered development and design .                                
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a
                                    href="portfolio.html"
                                    class="t-link t-link--alpha cards__footer-link"
                                >
                                   
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 t-mb-30 mb-md-0" >
                        <div class="cards border">
                            <div class="cards__img mx-auto">
                                <img
                                    src="assets/img/showcase-icon-3.png"
                                    alt="Techo Matrix"
                                    class="img-fluid w-100"
                                />
                            </div>
                            <div class="cards__body text-center">
                                <h4 class="text-capitalize cards__body-title">
                                    Solution Delivery
                                </h4>
                                <p class="mb-0 t-text-heading">
                                    Solution delivery ensures the seamless implementation of planned strategies and designs.
                                </p>
                            </div>
                            <div class="cards__footer text-center t-mt-30">
                                <a
                                    href="portfolio.html"
                                    class="t-link t-link--alpha"
                                >
                                   
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <br><br>
        <!-- Project Showcase -->
            <!-- Projects Section -->
            <section style="text-align: center; padding: 50px; background: #f4f4f4;">
                <h2>Related Work</h2>
                <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;" class="projects-hover">
                    <div style="background: white;background-image: url(./assets/img/h4.png); padding: 80px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h5.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h3.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h2.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h1.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h4.png); padding: 80px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h5.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h3.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h2.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    <div style="background: white;background-image: url(./assets/img/h1.png); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 250px;">
                        
                    </div>
                    
                </div>
            </section>




        <!-- Body ends  -->
    

        <!-- Back To Top -->
        <div class="back-to-top">
            <span class="back-top">
                <i class="las la-angle-up"></i>
            </span>
        </div>
        <!-- Back To Top End -->

          <!-- Footer  -->
          <footer class="footer-style-2">
           
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
          <!-- Quote Validation -->
        <script src="assets/js/quote-form-validation.js"></script>

    </body>

</html>
