<?php session_start(); ?>
<?php include "db.php"?>


<?php 


if(isset($_POST['signup'])){
    
    $sign_name=$_POST['sign_name'];
    $sign_email=$_POST['sign_email'];
    $sign_pass=$_POST['sign_pass'];
    
    $sql = "INSERT INTO users(username, email, password, position, status) VALUES ('{$sign_name}','{$sign_email}','{$sign_pass}','subscriber','unapproved')";
    $create_user_query= mysqli_query($conn,$sql);
    if(!$create_user_query){
            die("Query Failed". mysqli_error($conn));
        }
    else{
        header("Location: ../index.php"); 
    }
    
}



?>