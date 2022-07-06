<?php include "includes/db.php"?>
<?php error_reporting(0); ?>
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
                            <a href="blog.php" class="nav-item nav-link active">Blogs</a>
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
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                            <h4 class="m-0 text-white px-2">/</h4>
                            <h4 class="m-0 text-white">Blog Detail</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
                   
                   
                    <?php 
            
                    if(isset($_GET['b_id'])){
                        $the_blog_id=$_GET['b_id'];
                    }
                    
//                    $sql = "select * from blog";
//                    $blogs= mysqli_query($conn,$sql);
            
                    $query = "SELECT * FROM `blog` WHERE blog_id = '$the_blog_id'";
                    
                    $all_blogs= mysqli_query($conn,$query);

                    while($row=mysqli_fetch_assoc($all_blogs)){
                        $blog_id=$row['blog_id'];
                        $title=$row['title'];
                        $author=$row['author'];
                        $content=$row['content'];
                        $keywords=$row['keywords'];
                        $image=$row['image'];
                        $comments=$row['comments'];
                        $date=$row['date']; 
                        $status=$row['status'];  
                        
                    
                    
                
                    ?>
                    
            <!-- Blog Detail Start -->
            <div class="container py-5 px-2 bg-white">
                <div class="row px-4">
                    <div class="col-12">
                       
                        <img style="width:100%;" class="img-fluid mb-4" src="img/<?php echo $image; ?>" alt="Image">
                        <h2 class="mb-3 font-weight-bold"><?php echo $title; ?></h2>
                        <div class="d-flex">
                            <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i> <?php echo $date; ?></p>
                            <p class="mr-3 text-muted"><i class="fa fa-user"></i> <?php echo $author; ?></p>
                            <p class="mr-3 text-muted"><i class="fa fa-comments"></i> <?php echo $comments; ?> comments</p>
                        </div>
                        <p><?php echo $content; ?></p>
                    </div>
                    <div class="col-12 py-4">
                        <div class="btn-group btn-group-lg w-100">
                            <a href="single.php?b_id=<?php echo $blog_id-1; ?>" class="btn btn-outline-primary"><i class="fa fa-angle-left mr-2"></i> Previous</a>
                            <a href="single.php?b_id=<?php echo $blog_id+1; ?>"  class="btn btn-outline-primary">Next<i class="fa fa-angle-right ml-2"></i></a>
                        </div> 
                        
                    </div>
               
                    <div class="col-12">
                        <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                        
                        <?php 
                        if(isset($_POST['submit'])){
                
                            $name= $_POST['name'];
                            $email= $_POST['email'];
                            $comment= $_POST['comment'];

                            $query="INSERT INTO comment(`blog_id`, `name`, `email`, `comment`, `date`) VALUES ('$the_blog_id','{$name}','{$email}','{$comment}', now())";
                            $comment_query= mysqli_query($conn, $query);

                            if(!$comment_query){
                                die("Query Failed". mysqli_error($conn));
                            }
                            
                            $query_count= "UPDATE blog SET comments = comments+1 WHERE blog_id = '$the_blog_id'";
                            $update_comment_count= mysqli_query($conn,$query_count);
                            if(!$update_comment_count){
                                    die("Query Failed". mysqli_error($conn));
                            }

                        }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment *</label>
                                <textarea id="comment" cols="30" rows="5" class="form-control" name="comment"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Leave Comment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                         <div class="col-12 py-4">
                        <h3 class="mb-4 font-weight-bold"><?php echo $comments; ?> Comments</h3>
                        
                        <?php
                        $query="SELECT * FROM comment WHERE blog_id={$the_blog_id} ORDER BY blog_id DESC";
                        $show_comment= mysqli_query($conn,$query);
                        if(!$show_comment){
                            die("Query Failed". mysqli_error($conn));
                        }
                        while($row=mysqli_fetch_assoc($show_comment)){
                            
                            $name=$row['name'];
                            $comment=$row['comment'];
                            $date=$row['date'];


                        ?>
                        <div class="media mb-4">
                            <img src="img/images.png" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4><?php echo $name; ?> <small><i><?php echo $date; ?></i></small></h4>
                                <p><?php echo $comment; ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php 
                
                }
                    
                        if ( $the_blog_id !== $blog_id ){
                            echo "<h1 class='mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold'>No More Blogs.</h1>"; 
                        }
                        ?>
            </div>
            <!-- Blog Detail End -->
                
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
