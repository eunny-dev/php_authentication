<?php
//$_REQUEST
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $dbhost = "localhost";
   $dbuser ="root";
   $dbpass = "";
     $db   = "newton_decor";
   
   
   
   $conn = mysqli_connect('localhost', 'root', '','newton_decor');

   $sql = "delete from contact where name=$name";
   
   mysqli_query($con, $sql);
}
 header('location:fetch.php');