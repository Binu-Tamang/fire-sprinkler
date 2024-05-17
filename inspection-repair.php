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
    <?php $page_name = 'Our Services / Inspection & Repair' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="details-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 gy-3 d-lg-block">
                    <div class="container">
                        <div class="services-details-menu">
                            <ul class="services-menu-list">
                                <li><a aria-label="about the services we provided" href="inspection-repair.php"><i class="fa-solid fa-location-dot"></i>
                                        Inspection & Repair
                                    </a>
                                </li>
                                <li><a aria-label="about the services we provided" href="consulting-design.php"><i class="fa-solid fa-location-dot"></i>
                                        Consulting, Design & Installation
                                    </a>
                                </li>
                                <li><a aria-label="about the services we provided" href="services-detail-page.php"><i class="fa-solid fa-location-dot"></i>
                                        Underground Services
                                    </a>
                                </li>
                                <li><a aria-label="about the services we provided" href="newconstruction.php"><i class="fa-solid fa-location-dot"></i>
                                        New Construction
                                    </a>
                                </li>
                                <li><a aria-label="about the services we provided" href="services.php"><i class="fa-solid fa-location-dot"></i>
                                        All Services
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="need-help">
                                <strong>Need Help ?</strong>
                                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tenetur molestias cum corrupti voluptas culpa dicta, aut</p>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- <p class="mb-2">Call us</p> -->
                                        <h5 class="mb-0">778-837-2899</h5>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-8">
                        <div class="services-datail-content">
                            <img src="img/serv-3.jpg" alt="First Image">
                            <h2 class="card-title mt-4">Inspection & Repair</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolor earum suscipit odio maiores. Deserunt, ex! Repudiandae velit, nihil debitis quia ipsa perferendis eveniet aliquam ullam veniam in, rem accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates explicabo eius, rerum molestiae atque, temporibus ducimus beatae eum obcaecati, vitae quae provident et dolore doloribus. Consequuntur dolores modi fugit.lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos sed deleniti modi maiores ducimus doloribus omnis rem inventore quod sequi, rerum, aspernatur consectetur delectus quasi maxime obcaecati, reprehenderit illo!</p>
                            <!-- <span class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, incidunt odit, illo quas consequatur consequuntur quidem quis ducimus iure ratione dolore sunt fugiat ab, nam eius vel alias magni quaerat.</span> -->
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, temporibus. Cum laboriosam at perferendis harum modi vitae nulla quibusdam. Ea reiciendis officiis veniam aliquid quod? Nihil distinctio dolor non animi?</p> -->
                        </div>
                    </div>
                <!-- <div class="row">
                <div class="col-md-6">
                    <h2 class="card-title mt-4"> Inspection</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor architecto necessitatibus laboriosam cupiditate, suscipit doloribus, itaque numquam incidunt quaerat doloremque molestiae possimus nisi saepe animi modi ab iure quia pariatur?</p>
                </div>
                <div class="col-md-6">
                    <h2 class="card-title mt-4"> Repair</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor architecto necessitatibus laboriosam cupiditate, suscipit doloribus, itaque numquam incidunt quaerat doloremque molestiae possimus nisi saepe animi modi ab iure quia pariatur?</p>

                </div>
            </div> -->
            </div>
    </section>

    <?php include('inc/footer.html') ?>

    <?php include('inc/js.html') ?>

    <script>
        const navItems = document.querySelectorAll('.navbar .navbar-nav .nav-link');
        if (navItems.length >= 3) {
            navItems[2].classList.add("active");
        }

        const serviceNav = document.querySelectorAll('ul.services-menu-list > li');
        if (serviceNav.length >= 1) {
            serviceNav[0].classList.add("active");
        }
    </script>
</body>

</html>