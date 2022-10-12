<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="container">
        <table class="table">
            <tr>
                <th> Name</th>
                <th>Phopne Number</th>
                <th> Email</th>
                <th>county</th>
                <th>Subject</th>
                
            </tr>
            

            <?php
$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
  $db   = "newton_decor";



$conn = mysqli_connect('localhost', 'root', '','newton_decor');

            $sql = "select * from contact";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
    
                $name = $row['name'];
                $number = $row['phone'];
                $email = $row['email'];
                $county = $row['location'];
                $subject = $row['message'];

               
               
                echo "<tr>
            <td>$name</td>
            <td>$number</td>
            <td>$email</td>
            <td>$county</td>
            <td>$subject</td>
            
            
            <td> <a href='deletedata.php?name=$name' class='btn btn-danger' >Delete</a> </td>
        </tr>";
               
            }

            ?>

        </table>
    </div>
</body>

</html>