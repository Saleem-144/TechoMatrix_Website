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
                                 
                                
                                    
                                <li class="zol-menu__list zol-menu__current ">
                                    <a href="about.php" class="t-link zol-menu__link"
                                        >About Us </a
                                    >
                                <li class="zol-menu__list">
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
         <div class="zol-banner zol-banner--about t-pt-150 t-pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1 class="mt-0 t-text-light text-capitalize">About Us</h1>
                        <ul class="t-list breadcrumbs d-flex justify-content-center align-items-center"></ul>
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
        <!-- Banner End -->

        <!-- Info Section  -->
        <div class="t-pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 t-mb-50 mb-md-0">
                        <img
                            src="assets/img/about-section-img.png"
                            alt="Techo Matrix"
                            class="img-fluid mx-auto"
                        />
                    </div>
                    <div class="col-md-6">
                        <span
                            class="text-uppercase t-text-primary font-weight-bold"
                        >
                            about company
                        </span>
                        <h2 class="text-capitalize">
                            Don’t let the perfect become the enemy of the good.
                        </h2>
                        <p>
                            Techo Matrix is a good that there’s a cloud software as a
                            service solution on the market today that will serve
                            your core back-office needs. Many of those products
                            offer the potential not just to move your data and
                            processes
                        </p>
                    </div>
                </div>
                <div class="row t-pt-120 align-items-center">
                    <div class="col-md-6 t-mb-50 mb-md-0">
                        <ul class="t-list list-check">
                            <li class="list-check__item">
                                <h4 class="mt-0 text-capitalize t-mb-10">
                                    Your Optimal Choice.
                                </h4>
                                <p class="mb-0">
                                    Amcorper uisque dolor nec nisl ptesque.
                                    Bulum sed ultrices morbi.
                                </p>
                            </li>
                            <li class="list-check__item">
                                <h4 class="mt-0 text-capitalize t-mb-10">
                                    We’re Here To Help.
                                </h4>
                                <p class="mb-0">
                                    Amcorper uisque dolor nec nisl ptesque.
                                    Bulum sed ultrices morbi.
                                </p>
                            </li>
                            <li class="list-check__item">
                                <h4 class="mt-0 text-capitalize t-mb-10">
                                    Last day to save big.
                                </h4>
                                <p class="mb-0">
                                    Amcorper uisque dolor nec nisl ptesque.
                                    Bulum sed ultrices morbi.
                                </p>
                            </li>
                            <li class="list-check__item">
                                <h4 class="mt-0 text-capitalize t-mb-10">
                                    Come Give Us a Shout.
                                </h4>
                                <p class="mb-0">
                                    Amcorper uisque dolor nec nisl ptesque.
                                    Bulum sed ultrices morbi.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="accordion zol-accordion"
                            id="accordionExample"
                        >
                            <div class="card t-mb-10 zol-accordion__card">
                                <div
                                    class="card-header zol-accordion__card-header"
                                >
                                    <h4 class="mb-0 mt-0">
                                        <a
                                            class="d-flex justify-content-between w-100 text-left btn zol-accordion__card-btn text-capitalize"
                                            data-toggle="collapse"
                                            data-target="#collapseOne"
                                            aria-expanded="true"
                                            href="javascript:void(0)"
                                        >
                                            <span
                                                class="zol-accordion__card-btn-text"
                                            >
                                                biggest risk is a missed option
                                            </span>
                                            <span
                                                class="zol-accordion__card-btn-icon"
                                            >
                                                <i class="las la-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>

                                <div
                                    id="collapseOne"
                                    class="collapse show"
                                    data-parent="#accordionExample"
                                >
                                    <div
                                        class="card-body zol-accordion__card-body"
                                    >
                                        Sed in egestas nibh. Morbi mollis
                                        posuere enim ac porta. Duis quis sapien
                                        nunc. Duis sodales libe nisl dignissim
                                        mollis. eget tincidunt metus tincidunt
                                        ac. Suspe gravida vitae nisl sit amet
                                        mattis.
                                    </div>
                                </div>
                            </div>
                            <div class="card t-mb-10 zol-accordion__card">
                                <div
                                    class="card-header zol-accordion__card-header"
                                >
                                    <h4 class="mb-0 mt-0">
                                        <a
                                            class="d-flex justify-content-between w-100 text-left btn zol-accordion__card-btn text-capitalize"
                                            data-toggle="collapse"
                                            data-target="#collapseTwo"
                                            aria-expanded="true"
                                            href="javascript:void(0)"
                                        >
                                            <span
                                                class="zol-accordion__card-btn-text"
                                            >
                                                How can I return an item?
                                            </span>
                                            <span
                                                class="zol-accordion__card-btn-icon"
                                            >
                                                <i class="las la-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div
                                    id="collapseTwo"
                                    class="collapse"
                                    data-parent="#accordionExample"
                                >
                                    <div
                                        class="card-body zol-accordion__card-body"
                                    >
                                        Sed in egestas nibh. Morbi mollis
                                        posuere enim ac porta. Duis quis sapien
                                        nunc. Duis sodales libe nisl dignissim
                                        mollis. eget tincidunt metus tincidunt
                                        ac. Suspe gravida vitae nisl sit amet
                                        mattis.
                                    </div>
                                </div>
                            </div>
                            <div class="card t-mb-10 zol-accordion__card">
                                <div
                                    class="card-header zol-accordion__card-header"
                                >
                                    <h4 class="mb-0 mt-0">
                                        <a
                                            class="d-flex justify-content-between w-100 text-left btn zol-accordion__card-btn text-capitalize"
                                            data-toggle="collapse"
                                            data-target="#collapseThree"
                                            aria-expanded="true"
                                            href="javascript:void(0)"
                                        >
                                            <span
                                                class="zol-accordion__card-btn-text"
                                            >
                                                How to manage finance?
                                            </span>
                                            <span
                                                class="zol-accordion__card-btn-icon"
                                            >
                                                <i class="las la-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div
                                    id="collapseThree"
                                    class="collapse"
                                    data-parent="#accordionExample"
                                >
                                    <div
                                        class="card-body zol-accordion__card-body"
                                    >
                                        Sed in egestas nibh. Morbi mollis
                                        posuere enim ac porta. Duis quis sapien
                                        nunc. Duis sodales libe nisl dignissim
                                        mollis. eget tincidunt metus tincidunt
                                        ac. Suspe gravida vitae nisl sit amet
                                        mattis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row t-pt-120 t-pb-120">
                    <div class="col-md-6 t-mb-50 mb-md-0">
                        <img
                            src="assets/img/about-img.png"
                            alt="Techo Matrix"
                            class="img-fluid mx-auto"
                        />
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-capitalize">
                            Don’t let the perfect become the enemy of the good.
                        </h2>
                        <p>
                            Techo Matrix is a good that there’s a cloud software as a
                            service solution on the market today that will serve
                            your core back-office needs. Many of those products
                            offer the potential not just to move your data and
                            processes
                        </p>
                        <h4 class="t-mt-50">
                            Works Skills
                        </h4>
                        <div class="row">
                            <div class="col-md-6 t-mb-30">
                                <span class="text-capitalize t-text-heading t-mb-10">
                                    wordPress
                                </span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;">60%</div>
                                </div>
                            </div>
                            <div class="col-md-6 t-mb-30">
                                <span class="text-capitalize t-text-heading t-mb-10">
                                    HTML & CSS
                                </span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 85%;">85%</div>
                                </div>
                            </div>
                            <div class="col-md-6 t-mb-30">
                                <span class="text-capitalize t-text-heading t-mb-10">
                                    Javascript
                                </span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%;">95%</div>
                                </div>
                            </div>
                            <div class="col-md-6 t-mb-30">
                                <span class="text-capitalize t-text-heading t-mb-10">
                                    PHP
                                </span>
                                <div class="progress">
                                    <div class="progress-bar t-bg-alpha" role="progressbar" style="width: 70%;">70%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Section End -->

        <!-- Team Member  -->
        <div class="t-pt-120 t-pb-120 t-bg-light-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <span
                            class="text-uppercase t-text-primary font-weight-bold"
                        >
                        Team Member
                        </span>
                        <h2 class="text-capitalize">
                            Meet Our Team Member
                        </h2>
                    </div>
                </div>
                <div class="row t-mt-70">
                    <div class="col-md-6 col-lg-3 t-mb-30">
                        <div class="price-card border price-card--team">
                            <ul class="t-list social-list price-card--team-social-icon flex-column justify-content-center justify-content-md-end">
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="price-card__img-circle mx-auto ">
                                <img src="assets/img/team-6.jpg" alt="Techo Matrix" class="img-fluid w-100">
                            </div>
                            <div class="price-card__news-body text-center">
                                <h4 class="t-mt-0">
                                    <a href="#" class="t-link t-link--alpha">
                                        Robina Akter
                                    </a>
                                </h4>
                                <span class="xsm-text text-uppercase t-text-heading d-block price-card--team-pos">
                                    Managing Partner
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30">
                        <div class="price-card border price-card--team">
                            <ul class="t-list social-list price-card--team-social-icon flex-column justify-content-center justify-content-md-end">
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="price-card__img-circle mx-auto ">
                                <img src="assets/img/user-2.jpg" alt="Techo Matrix" class="img-fluid w-100">
                            </div>
                            <div class="price-card__news-body text-center">
                                <h4 class="t-mt-0">
                                    <a href="#" class="t-link t-link--alpha">
                                        Robina Akter
                                    </a>
                                </h4>
                                <span class="xsm-text text-uppercase t-text-heading d-block price-card--team-pos">
                                    Managing Partner
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30">
                        <div class="price-card border price-card--team">
                            <ul class="t-list social-list price-card--team-social-icon flex-column justify-content-center justify-content-md-end">
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="price-card__img-circle mx-auto ">
                                <img src="assets/img/user.jpg" alt="Techo Matrix" class="img-fluid w-100">
                            </div>
                            <div class="price-card__news-body text-center">
                                <h4 class="t-mt-0">
                                    <a href="#" class="t-link t-link--alpha">
                                        Robina Akter
                                    </a>
                                </h4>
                                <span class="xsm-text text-uppercase t-text-heading d-block price-card--team-pos">
                                    Managing Partner
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30">
                        <div class="price-card border price-card--team">
                            <ul class="t-list social-list price-card--team-social-icon flex-column justify-content-center justify-content-md-end">
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="social-list__item mr-0">
                                    <a href="#" class="t-link social-icon social-icon--alpha price-card__social-icon">
                                        <span class="xlg-text">
                                            <i class="lab la-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="price-card__img-circle mx-auto ">
                                <img src="assets/img/user.jpg" alt="Techo Matrix" class="img-fluid w-100">
                            </div>
                            <div class="price-card__news-body text-center">
                                <h4 class="t-mt-0">
                                    <a href="#" class="t-link t-link--alpha">
                                        Robina Akter
                                    </a>
                                </h4>
                                <span class="xsm-text text-uppercase t-text-heading d-block price-card--team-pos">
                                    Managing Partner
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Team Member End -->

        <!-- Counter UP -->
        <div class="t-pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-primary t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-handshake"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-primary t-mb-10">
                                    100%
                                </h4>
                                <p class="mb-0 text-capitalize">
                                    Client Satisfaction
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-beta t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-tools"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-beta t-mb-10">500+</h4>
                                <p class="mb-0 text-capitalize">
                                    completed project
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-gamma t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-headset"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-gamma t-mb-10">24H</h4>
                                <p class="mb-0 text-capitalize">support team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 t-mb-30 mb-lg-0">
                        <div
                            class="counter-card border d-flex align-items-center"
                        >
                            <div
                                class="counter-card__icon-box t-bg-delta t-mr-16"
                            >
                                <span class="counter-card__icon t-text-light">
                                    <i class="las la-globe"></i>
                                </span>
                            </div>
                            <div class="counter-card__text">
                                <h4 class="mt-0 t-text-delta t-mb-10">100k</h4>
                                <p class="mb-0 text-capitalize">
                                    client worldwide
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter UP End -->

        <!-- Award  -->
        <div class="t-pt-120 t-pb-105">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 t-mb-50 mb-lg-0">
                        <img src="assets/img/award.png" alt="Techo Matrix" class="img-fluid mx-auto">
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-12">
                                <span
                                    class="text-uppercase t-text-primary font-weight-bold"
                                >
                                award
                                </span>
                                <h2 class="text-capitalize">
                                    our achievement
                                </h2>
                            </div>
                            <div class="col-12 t-mt-50">
                                <div class="award-slider">
                                    <div class="award-slider__item">
                                        <div class="price-card border">
                                            <div class="price-card__img mx-auto ">
                                                <a href="#" class="t-link">
                                                    <img src="assets/img/price-img-1.png" alt="Techo Matrix" class="img-fluid w-100">
                                                </a>
                                            </div>
                                            <div class="price-card__news-body">
                                                <h5 class="t-mt-0">
                                                    <a href="#" class="t-link t-link--alpha">
                                                        They're getting to know you by way of
                                                    </a>
                                                </h5>
                                                <a href="#" class="t-link t-link-primary sm-text text-uppercase">
                                                    learn more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-slider__item">
                                        <div class="price-card border">
                                            <div class="price-card__img mx-auto ">
                                                <a href="#" class="t-link">
                                                    <img src="assets/img/price-img-1.png" alt="Techo Matrix" class="img-fluid w-100">
                                                </a>
                                            </div>
                                            <div class="price-card__news-body">
                                                <h5 class="t-mt-0">
                                                    <a href="#" class="t-link t-link--alpha">
                                                        They're getting to know you by way of
                                                    </a>
                                                </h5>
                                                <a href="#" class="t-link t-link-primary sm-text text-uppercase">
                                                    learn more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-slider__item">
                                        <div class="price-card border">
                                            <div class="price-card__img mx-auto ">
                                                <a href="#" class="t-link">
                                                    <img src="assets/img/price-img-1.png" alt="Techo Matrix" class="img-fluid w-100">
                                                </a>
                                            </div>
                                            <div class="price-card__news-body">
                                                <h5 class="t-mt-0">
                                                    <a href="#" class="t-link t-link--alpha">
                                                        They're getting to know you by way of
                                                    </a>
                                                </h5>
                                                <a href="#" class="t-link t-link-primary sm-text text-uppercase">
                                                    learn more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-slider__item">
                                        <div class="price-card border">
                                            <div class="price-card__img mx-auto ">
                                                <a href="#" class="t-link">
                                                    <img src="assets/img/price-img-1.png" alt="Techo Matrix" class="img-fluid w-100">
                                                </a>
                                            </div>
                                            <div class="price-card__news-body">
                                                <h5 class="t-mt-0">
                                                    <a href="#" class="t-link t-link--alpha">
                                                        They're getting to know you by way of
                                                    </a>
                                                </h5>
                                                <a href="#" class="t-link t-link-primary sm-text text-uppercase">
                                                    learn more
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
        <!-- Award End -->

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
          <!-- Quote Validation -->
          <script src="assets/js/quote-form-validation.js"></script>
    </body>

</html>
