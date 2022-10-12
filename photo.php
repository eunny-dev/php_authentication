<!DOCTYPE html>
<html>

<head>
  <title>more information</title>

  <!--bootstrap link-->
  <link rel="shortcut icon" type="image" href="images/bells.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap link-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="my.css">

  <!-- end of bootstrap link-->

</head>

<body>

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }

    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
    }
  </style>








  <!-- navigation bar <!-->
  <?php include("nav.php") ?>
  <div class="container" style="background-color:black ;">
    <div class="row">
      <div class="col-sm-4">
        <img src="web/af3.jpg">
      </div>
    </div>
  </div>


  <?php include("floatbar.php") ?>

  <?php include("footer.php") ?>
</body>

</html>