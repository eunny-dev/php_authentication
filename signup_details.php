<?php
if(isset($_POST['email'])){
   //connect
   $conn = mysqli_connect('localhost', 'root', '','newton_decor');

      extract($_POST); //creates variables
   
     if($password != $repeat_password){
           echo "Your passwords must match!";
           header("refresh:3; url=SIGNUP.php");
           exit;
     }
     else{
            $encrypted_password = password_hash($password,PASSWORD_BCRYPT);
            //insert
            $sql = " INSERT INTO `login_details`(`name`, `email`, `password`) 
            VALUES ('$name','$email','$encrypted_password')";
            
            mysqli_query($conn, $sql) or die(mysqli_error($conn));
            echo "Registered successfully";
            header("refresh:2; url=login.php");
            exit;
     }

}else{
    header("location:photo.php");
}