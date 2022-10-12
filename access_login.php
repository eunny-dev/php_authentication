<?php
if(isset($_POST['email'])){
    $conn = mysqli_connect('localhost', 'root', '','newton_decor');
   extract($_POST); //$email $password
   $sql = "SELECT * FROM login_details WHERE email='$email'";
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
           header("photo.php");
      }else{
        echo "Wrong username or password";
        header("refresh:2; url=login.php");
        exit;
      }
   }
}else{
    header("location:photo.php");
}