<?php include "db.php"?>

<?php session_start(); ?>

<?php 

$conn= mysqli_connect('localhost', 'root', '', 'blogger'); 

if(isset($_POST['login'])){
    
    $log_email=$_POST['log_email'];
    $log_pass=$_POST['log_pass'];
    
    $sql="SELECT * FROM users WHERE email ='{$log_email}'";
    $select_user_query = mysqli_query($conn, $sql);

    if(!$select_user_query){
        
        die("Query Failed". mysqli_error($conn));
        
    }
    while($row=mysqli_fetch_assoc($select_user_query)){
        
        $user_id=$row['user_id'];
        $user_name=$row['username'];
        $user_email=$row['email'];
        $password=$row['password'];
        $position=$row['position'];
        $status=$row['status'];
        
    }
    
    if($log_email !== $user_email && $log_pass !==  $password){
        
        header("Location: ../index.php");  
        
    }
    
    else if($log_email == $user_email && $log_pass ==  $password && $status == 'approved' && $position  == 'admin'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $user_email;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = $status;

        header("Location: ../admin"); 
        
    }
    
    
    else{
        
        header("Location: ../index.php"); 

    }
        
}


?>