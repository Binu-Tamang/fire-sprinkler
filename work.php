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
    <?php $page_name = 'Our Work' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <!-- isotope project -->
    <section class="isotope-project container-md-xxl work-page">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s">
            <!-- <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p> -->
            <h2 class="card-title text-center">Our Latest Projects</h2>

            <!-- <h1 class="display-5 text-black mb-2">See What We Have Recently Completed</h1> -->
        </div>
        <div class="portfolio-menu container">
            <ul class="isotope-ul">
                <li class="active isotope-li" data-filter="*">All</li>
                <li data-filter=".one-iso">Residential</li>
                <li data-filter=".two-iso">Event Centers & Schools</li>
                <li data-filter=".three-iso">Industrial & Warehouse</li>
                <li data-filter=".four-iso">Featured Projects</li>
                <li data-filter=".five-iso">Health Care & Senior Living</li>
                <li data-filter=".six-iso">Tenant Interiors</li>
            </ul>
        </div>
        <div class="container">
            <div class="portfolio-item row g-3">
                <div class="col-md-3 col-sm-6 item one-iso">
                    <div class="project-wrap">
                        <img src="img/iso-1.jpg" alt="Laser Cutting">
                        <div class="content-display">
                            <strong>Resisdential Area</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item two-iso">
                    <div class="project-wrap">
                        <img src="img/about-1.png" alt="CNC Bending">
                        <div class="content-display">
                            <strong>Event Centers & Schools</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item one-iso">
                    <div class="project-wrap">
                        <img src="img/about-2.png" alt="Laser Cutting">
                        <div class="content-display">
                            <strong>Resisdential Area</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item three-iso">
                    <div class="project-wrap">
                        <img src="img/serv-1.jpg" alt="Fabrication">
                        <div class="content-display">
                            <strong>Industrial & Warehouse</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item one-iso">
                    <div class="project-wrap">
                        <img src="img/serv-2.jpg" alt="Laser Cutting">
                        <div class="content-display">
                            <strong>Resisdential Area</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item three-iso">
                    <div class="project-wrap">
                        <img src="img/serv-3.jpg" alt="Fabrication">
                        <div class="content-display">
                            <strong>Industrial & Warehouse</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item three-iso">
                    <div class="project-wrap">
                        <img src="img/carousel-1.jpg" alt="Fabrication">
                        <div class="content-display">
                            <strong>Industrial & Warehouse</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item three-iso">
                    <div class="project-wrap">
                        <img src="img/carousel-2.jpg" alt="Fabrication">
                        <div class="content-display">
                            <strong>Industrial & Warehouse</strong>
                            <p> It have one level of park underground parking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- isotope project -->

    <?php include('inc/footer.html') ?>

    <?php include('inc/js.html') ?>

    <script>
        const navItems = document.querySelectorAll('.navbar .navbar-nav .nav-link');
        if (navItems.length >= 4) {
            navItems[3].classList.add("active");
        }
    </script>
</body>

</html>