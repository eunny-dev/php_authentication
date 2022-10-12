<!DOCTYPE html>
<html>

<head>
  <title>contacts for Newton decor</title>
  <!--bootstrap link-->
  <!--bootstrap link-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="my.css">
<!-- end of bootstrap link-->
<?php
include('header.php');
?>

<style>
  img {

    margin-right: 30px;
    /* Horizontal Space */
    margin-bottom: 30px;
    /* Vertical Space */
    border: 2px;
  }
</style>
</head>

<body>

  <!-- navigation bar <!-->
  <?php include("nav.php") ?>
  <!-- end of navigation bar <!-->


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-1">

      </div>

      <div class="col-sm-5">



        <h2>Contact Form</h2>
        <form action="conn.php" method="post">

          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Your name..">

          <label for="phnumber">Phone Number</label>
          <input class="form-control" type="value" name="number" placeholder="Your phone number.."><br>

          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" placeholder="Your email address..">
          <br>

          <label for="country">County</label>
          <select id="country" name="county" class="form-control">
            <option value="australia">Nairobi</option>
            <option value="canada">Mombasa</option>
            <option value="usa">Nakuru</option>
            <option value="australia">Kisumu</option>
            <option value="canada">Siaya</option>
            <option value="usa">Kiambu</option>
          </select>

          <label for="subject">Subject</label>
          <textarea name="subject" placeholder="Write something.." style="height:200px"></textarea>

          <input type="submit" value="Submit" name="btn" class="btn btn-danger">


        </form>
      </div>
      <div class="col-sm-1">

      </div>
      <div class="col-sm-4">
        <br>
        <div class="av-special-heading av-5n1fq-b9ca4ce4ab50f19568841d403816b9bd av-special-heading-h3  avia-builder-el-5  el_before_av_textblock  avia-builder-el-first ">
          <h3 class="av-special-heading-tag" itemprop="headline">Contact details</h3>
          <div class="special-heading-border">
            <div class="special-heading-inner-border"></div>
          </div>
        </div>

        
        <br>
        <hr>
        <p>+2547 285 1794 (tel)</p>

        <p>info@eunnydev.co.ke</p>

        <p>Ohanga Decor</p>
        <p>29 Kimathi Street</p>
        <p>Nairobi</p>
        <p>254782-00200</p>

        <h3>SOCIAL CONNECTIONS</h3>
        <hr>

        <!-- social media links -->

        <!-- twitter link -->
        <a href="index.html">
          <img loading="lazy" class="alignleft fadeit size-full wp-image-31" src="web/twitter.png" width="33" height="33">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>
        <!-- facebook link -->
        <a href="portfolio.html" class="alignleft" style="float: left; margin: 0px; padding: 0px;">
          <img loading="lazy" class="alignleft fadeit size-full wp-image-32" src="web/fb.jpg" width="30" height="30">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>

        <!-- linked in -->
        <a href="portfolio.html" class="alignleft" style="float: left; margin: 0px; padding: 0px;" padding="30px">
          <img loading="lazy" class="alignleft fadeit size-full wp-image-32" src="web/em.png" width="30" height="30">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>
        <!-- email -->
        <a href="portfolio.html" class="alignleft" style="float: left; margin: 0px; padding: 0px;" padding="30px">
          <img loading="lazy" class="alignleft fadeit size-full wp-image-32" src="web/ld.png" width="30" height="30">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>

        <!-- end of social media links -->
      </div>
      <div class="col-sm-1">

      </div>
    </div>

  </div>
</body>


<?php include("floatbar.php") ?>
<?php include("footer.php") ?>
</html>