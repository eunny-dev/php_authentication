<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynav">
      <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse  topnav" id="mynav">
  <ul class="navbar-nav me-auto">
    <li class="nav-item"><a href="index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link"href="about.php">About</a></li>
    <li class="nav-item"> <a class="nav-link" href="contacts.php">Contact</a></li>
   <li class="nav-item"><a class="nav-link"href="portfolio.php">Portfolio</a></li>
   <li class="nav-item">    <a class="nav-link" href="photo.php">Gallary</a></li>
    <li class="nav-item">    <a class="nav-link" href="services.php">Services</a></li>
      
     </ul>
     <ul class="navbar-nav">
     <?php if(!isset($_SESSION['user_data'])): ?>
     <li class="nav-item">    <a aria-current="page" href="signup.php">Sign Up</a></li>
    <li class="nav-item">    <a class="nav-link" href="login.php">Log In</a></li>
     </ul>
     <?php else:?>
            <li class="nav-item">
             <a class="nav-link" href="logout.php"><?=$_SESSION['user_data']['names'];?></a>
            </li>  
        <?php endif; ?>

  </div>
</nav>
