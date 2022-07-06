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
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="blog.php" class="nav-item nav-link">Blogs</a>
                            <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="col-sm-6 text-center text-md-left">
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Contact Me</h1>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="index.php">Home</a></h4>
                            <h4 class="m-0 text-white px-2">/</h4>
                            <h4 class="m-0 text-white">Contact Me</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="container bg-white pt-5">
                <div class="row px-3 pb-2">
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Address</h4>
                        <p>123 Street, New York, USA</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Phone</h4>
                        <p>+012 345 6789</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Email</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="col-md-12 pb-5">
                    <div class="contact-form">
                       <?php 
                        
                        
                        if(isset($_POST['submit'])){
                
                            $name= $_POST['name'];
                            $email= $_POST['email'];
                            $subject= $_POST['subject'];
                            $message= $_POST['message'];

                            $query="INSERT INTO contact(`name`, `email`, `subject`, `message`, `date`) VALUES ('{$name}','{$email}','{$subject}','{$message}', now())";
                            $message_query= mysqli_query($conn, $query);

                            if(!$message_query){
                                die("Query Failed". mysqli_error($conn));
                            }

                        }
                        
                        
                        
                        
                        ?>
                        <form action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="8" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary" value="submit" name="submit" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


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