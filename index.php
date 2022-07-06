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
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="blog.php" class="nav-item nav-link">Blogs</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->
                
                <!-- Carousel Start -->
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="img/blog-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-3 text-white font-weight-bold">Interesting Alternative Investment Ideas Worth Checking Out</h2>
                                    <div class="d-flex text-white">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 2022-06-18</small>
                                        <small class="mr-2"><i class="fa fa-folder"></i> Jhon Doe</small>
                                        <small class="mr-2"><i class="fa fa-comments"></i> 2 Comments</small>
                                    </div>
                                    <a href="single.php?b_id=1" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                            
                            <?php 
                    
                            $query = "SELECT * FROM `blog` WHERE status='published' ORDER BY date DESC LIMIT 2";

                            $all_blogs= mysqli_query($conn,$query);

                            while($row=mysqli_fetch_assoc($all_blogs)){
                                $blog_id=$row['blog_id'];
                                $title=$row['title'];
                                $author=$row['author'];
                                $content=$row['content'];
                                $content_short=substr($row['content'],0,100);
                                $keywords=$row['keywords'];
                                $image=$row['image'];
                                $comments=$row['comments'];
                                $date=$row['date']; 
                                $status=$row['status'];  


                            ?>
                            <div class="carousel-item">
                                <img class="w-100" src="img/<?php echo $image; ?>" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="text-white font-weight-bold"><?php echo $title; ?></h2>
                                    <div class="d-flex">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> <?php echo $date; ?></small>
                                        <small class="mr-2"><i class="fa fa-user"></i> <?php echo $author; ?></small>
                                        <small class="mr-2"><i class="fa fa-comments"></i> <?php echo $comments; ?> Comments</small>
                                    </div>
                                    <a href="single.php?b_id=<?php echo $blog_id; ?>" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- Carousel End -->
                
                
                <!-- Blog List Start -->
                <div class="container bg-white pt-5">
                   <?php 
                    
                    $query = "SELECT * FROM `blog` WHERE status='published' ORDER BY date DESC LIMIT 3";
                    
                    $all_blogs= mysqli_query($conn,$query);

                    while($row=mysqli_fetch_assoc($all_blogs)){
                        $blog_id=$row['blog_id'];
                        $title=$row['title'];
                        $author=$row['author'];
                        $content=$row['content'];
                        $content_short=substr($row['content'],0,100);
                        $keywords=$row['keywords'];
                        $image=$row['image'];
                        $comments=$row['comments'];
                        $date=$row['date']; 
                        $status=$row['status'];  
                        
                
                    ?>
                    
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img/<?php echo $image; ?>" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"><?php echo $title; ?></h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> <?php echo $date; ?></small>
                                <small class="mr-2 text-muted"><i class="fa fa-user"></i> <?php echo $author; ?></small>
                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> <?php echo $comments; ?> Comments</small>
                            </div>
                            <p>
                                <?php echo $content_short; ?>
                            </p>
                            <a class="btn btn-link p-0" href="single.php?b_id=<?php echo $blog_id; ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- Blog List End -->
                
                
                <!-- Subscribe Start -->
                <div class="container py-5 px-4 bg-secondary text-center">
                    <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                    <p class="text-white">Subscribe and get my latest article in your inbox</p>
                    <form class="form-inline justify-content-center">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                          </div>
                    </form>
                </div>
                <!-- Subscribe End -->

                
                
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
