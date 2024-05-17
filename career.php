<!DOCTYPE html>
<html lang="en">

<head>
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
    <?php $page_name = 'Career' ?>
    <?php include('inc/breadcrumb.php') ?>
    <!-- banner and header page -->

    <section class="career-section">
        <div class="container">
            <div class="text-center mx-auto">
                <h1 class="display-5 mb-2">Employment Opportunities</h1>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore itaque fugiat obcaecati architecto repudiandae quibusdam, ipsa iure qui vero rerum iusto nisi deleniti, nostrum doloremque, autem tempore corporis reiciendis aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repudiandae blanditiis reiciendis fugit, aliquam iusto aliquid exercitationem ullam iure est alias. Voluptatum reprehenderit expedita soluta fugiat nisi, ab distinctio! Qui.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nemo corrupti voluptatem modi repellat vel tenetur laboriosam, tempore incidunt nobis nihil repudiandae distinctio, quae provident inventore accusamus sit beatae voluptatibus!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores unde iure delectus porro ea consectetur inventore corrupti non quae, doloribus deleniti consequatur soluta. Animi in placeat blanditiis, culpa delectus tempora?</p>

            <div class="apply-form ">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="card-title mt-4">Apply now</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="firstName"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="firstName" aria-required="true" aria-invalid="false" placeholder="First Name" value="" type="text" name="firstName"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="lastName"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="lastName" aria-required="true" aria-invalid="false" placeholder="Last Name" value="" type="text" name="lastName"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false" placeholder="Your Email" value="" type="email" name="email"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="phoneNumber"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="phoneNumber" aria-required="true" aria-invalid="false" placeholder="Your Phone" value="" type="tel" name="phoneNumber"></span>
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="company"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="company" aria-required="true" aria-invalid="false" placeholder="Company Name" value="" type="text" name="company"></span>
                                    </p>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="address"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="address" aria-required="true" aria-invalid="false" placeholder="Address" value="" type="text" name="address"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <p><span class="wpcf7-form-control-wrap" data-name="message"><textarea cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="message" aria-required="true" aria-invalid="false" placeholder="Leave a message here" name="message"></textarea></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <p><span class="wpcf7-form-control-wrap" data-name="file"><input size="40" class="wpcf7-form-control wpcf7-file" id="fileInput" accept=".pdf,.docx" aria-invalid="false" type="file" name="file"></span><br>
                                        <span style="display: block;color: #8a8a8a;" class="help-block mt-2"><br>
                                            Upload your resume(2MB max file size)<br>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=" mt-3  style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                <a href="#" class="btn btn-theme py-3 px-4">Submit Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="applicant-pic">
                            <!-- <img src="img/serv-1.jpg" alt="First Image"> -->
                            <img class="img-fluid shine" src="img/iso-1.jpg">
                            <img class="img-fluid shine" src="img/about-1.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('inc/footer.html') ?>

    <?php include('inc/js.html') ?>

    <script>
        const navItems = document.querySelectorAll('.navbar .navbar-nav .nav-link');
        if (navItems.length >= 5) {
            navItems[4].classList.add("active");
        }
    </script>
</body>

</html>