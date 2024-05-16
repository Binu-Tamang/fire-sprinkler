<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Fire Sprinkler</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="#" rel="icon"> -->

    <?php include('inc/css.html') ?>
</head>
<body>
    <!-- ========================header section here ============================ -->
    <?php include('inc/header.html') ?>
    <!-- ========================header section here ============================ -->

   <!-- banner and headre page  -->
   <?php $page_title = 'Our Work ' ?>
    <?php $page_name = 'Our Work' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <!-- isotope project -->
    <section class="isotope-project container-md-xxl work-page">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s">
            <!-- <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p> -->
            <h1 class="display-5 text-black mb-2">See What We Have Recently Completed</h1>
        </div>
        <div class="portfolio-menu">
            <ul class="isotope-ul">
                <li class="active isotope-li" data-filter="*">All</li>
                <li data-filter=".one-iso">Residential</li>
                <li data-filter=".two-iso">Event Centers & Schools</li>
                <li data-filter=".three-iso">Industrial & Warehouse</li>
            </ul>
        </div>
        <div class="container">
            <div class="portfolio-item row g-3" id="open-popup">
                    <div class="col-md-3 col-sm-6 item one-iso">
                        <a href="img/iso-1.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/iso-1.jpg" alt="Laser Cutting">
                    </div>
                    <div class="col-md-3 col-sm-6 item two-iso">
                        <a href="img/about-1.png" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/about-1.png" alt="CNC Bending">
                    </div>
                    <div class="col-md-3 col-sm-6 item one-iso">
                        <a href="img/about-2.png" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/about-2.png" alt="Laser Cutting">
                    </div>
                    <div class="col-md-3 col-sm-6 item three-iso">
                        <a href="img/serv-1.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/serv-1.jpg" alt="Fabrication">
                    </div>
                    <div class="col-md-3 col-sm-6 item one-iso">
                        <a href="img/serv-2.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/serv-2.jpg" alt="Laser Cutting">
                    </div>
                    <div class="col-md-3 col-sm-6 item three-iso">
                        <a href="img/serv-3.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/serv-3.jpg" alt="Fabrication">
                    </div>
                    <div class="col-md-3 col-sm-6 item three-iso">
                        <a href="img/carousel-1.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/carousel-1.jpg" alt="Fabrication">
                    </div>
                    <div class="col-md-3 col-sm-6 item three-iso">
                        <a href="img/carousel-2.jpg" class="image-link-js test-popup-link" id="my-popup" data-lightbox="pop-images" title="pop images"></a>
                        <img class="pop-images aos-init aos-animate" src="img/carousel-2.jpg" alt="Fabrication">
                    </div>
            </div>
        </div>
    </section>
    <!-- isotope project -->

    <?php include('inc/footer.html') ?>

    <?php include('inc/js.html') ?>
</body>
</html>