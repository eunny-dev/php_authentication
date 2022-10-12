<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<style>
     img{
   
   margin-right: 30px;   /* Horizontal Space */
   margin-bottom: 30px;  /* Vertical Space */
   border: 2px solid red;
}
</style>
<body>
  
</body>
</html>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid">

    <footer class="text-white text-center text-lg-start bg-primary">
    <!-- Grid container -->
    <div class="container-fluid">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About Ohanga N Decor</h5>
  
          <pre> 
           Ohanga N decor is a company 
            that deals with home decoration, 
            making your home more 
            attractive and appealing
         </pre>
  
          <p>
           if you are within Nairobi looking for decor company then look nomore!!
          </p>
  
     
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
         
  
        <br><b></b>
  
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Nairobi, CBD </span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@eunnydev.co.ke</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+254 743 088 527</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+254 753 765 876 </span>
            </li>
          </ul>

          <div class="mt-4">
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
          <img loading="lazy" class="alignleft fadeit size-full wp-image-32" src="web/ld.png" width="30" height="30">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>
        <!-- email -->
        <a href="portfolio.html" class="alignleft" style="float: left; margin: 0px; padding: 0px;" padding="30px">
          <img loading="lazy" class="alignleft fadeit size-full wp-image-32" src="web/em.png" width="30" height="30">
          <span class="image-overlay overlay-type-extern" style="display: none;">
            <span class="image-overlay-inside"></span></span>
        </a>

        <!-- end of social media links -->

          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>Closed</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://eunnydev.co.ke/">eunnydev.co.ke</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
<!-- End of .container -->

<!-- Back to top button -->
<br>
<button
        onclick="topFunction()" 
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="bi bi-arrow-up"></i>Top
</button>


<script>
  //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
