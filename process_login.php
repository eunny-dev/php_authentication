<?php
if(isset($_POST['email'])){
   include('_connect.php');
   extract($_POST); //$email $password
   $sql = "SELECT * FROM users WHERE email='$email'";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) == 0){
        echo "Wrong username or password";
        header("refresh:2; url=login.php");
        exit;
   }else{
      $user_data = mysqli_fetch_assoc($result);
      $hash = $user_data['password'];
      $valid = password_verify($password, $hash);
      if($valid==true){
           //success
           session_start();
           $_SESSION["user_data"] = $user_data;
           header("location:index.php");
      }else{
        echo "Wrong username or password";
        header("refresh:2; url=login.php");
        exit;
      }
   }
}else{
    header("location:login.php");
}
