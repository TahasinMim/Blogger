<?php include "includes/db.php"?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bloggy - Personal Blog Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/dp.png" alt="Image">
                <h1 class="font-weight-bold">Tahasin Elias</h1>
                <p class="mb-4">
                    I'm a CSE undergraduate and a passionate web developer. I am creatively curious and a self-learner. I spend my days with my hands in many different areas of web development from back-end programming. I love exploring new technologies and currently learning new skills. AI is my passion. I love to work with Deep Learning.
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" target="_blank"  href="https://www.facebook.com/tah.asin.357"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary mr-2" target="_blank" href="https://linkedin.com/in/tahasin-mim-63a66b234"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary mr-2" target="_blank"  href="https://www.instagram.com/mimtahasin"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary mr-2" target="_blank"  href="https://github.com/TahasinMim"><i class="fab fa-github"></i></a>
                </div>
                <a href="action.php" class="btn btn-lg btn-block btn-primary mt-auto">Log In</a>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>
        <div class="content">
            <!-- Navbar Start -->
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                    <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link active">About</a>
                            <a href="blog.php" class="nav-item nav-link">Blogs</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="col-sm-6 text-center text-md-left">
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">About Me</h1>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="index.php">Home</a></h4>
                            <h4 class="m-0 text-white px-2">/</h4>
                            <h4 class="m-0 text-white">About Me</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="container bg-white pt-5">
                <div class="row px-3 pb-5">
                    <div class="col-md-12">
                        <h2 class="mb-4 font-weight-bold">Assalamualaikum</h2>
                        <img class="img-fluid float-left w-50 mr-4 mb-3" src="img/about_me.jfif" alt="Image">
                        <p class="m-0">
                            Takimata lorem et ut et diam amet dolor gubergren, amet dolor eirmod sea sea invidunt, sed no sed diam ipsum ut et. Sit nonumy est ut consetetur sed, labore dolor ipsum sed ea dolor lorem erat et erat, consetetur sed labore duo voluptua rebum sed gubergren. Dolores nonumy sanctus erat clita stet sed, dolore justo diam eos aliquyam diam. Clita nonumy rebum dolor dolor eos takimata labore diam sed, et voluptua et invidunt sanctus, elitr dolor nonumy tempor dolor elitr lorem no dolor ipsum, ut at gubergren dolor est aliquyam stet, et sea takimata rebum labore erat duo invidunt lorem. At takimata stet diam dolore accusam, kasd at diam aliquyam diam sed est dolor takimata. Sadipscing rebum diam ea et tempor, eirmod et et invidunt voluptua et dolor sit. Labore labore clita et amet sea sit et, est ipsum eirmod amet voluptua dolore, diam eirmod kasd lorem gubergren clita at amet, sea accusam vero amet lorem eos sed diam sit amet, nonumy ipsum et tempor magna dolores aliquyam vero eos ipsum. Ipsum ipsum sadipscing diam aliquyam diam et ipsum eos vero, gubergren magna elitr elitr clita dolor. Aliquyam vero sed sanctus sed dolore sanctus elitr no amet, ea magna ipsum.
                        </p>
                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="d-flex flex-column skills">
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Adaptability</div>
                            </div>
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Research</div>
                            </div>
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Editing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Footer Start -->
            <div class="container py-4 bg-secondary text-center">
                <p class="m-0 text-white">
                    Copyright &copy; 2022, All Rights Reserved
                </p>
            </div>
            <!-- Footer End -->
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>