<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="my.css">
    <title>registration form</title>
</head>
<body>


    <!-- navigation bar <!-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynav">
      <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse  topnav" id="mynav">
  <ul class="navbar-nav me-auto">
    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link"href="about.php">About</a></li>
    <li class="nav-item"> <a class="nav-link" href="contacts.php">Contact</a></li>
   <li class="nav-item"><a class="nav-link"href="portfolio.php">Portfolio</a></li>
   <li class="nav-item">    <a class="nav-link" href="photo.php">Gallary</a></li>
    <li class="nav-item">    <a class="nav-link active" href="services.php">Services</a></li>
 
     </ul>
  </div>
</nav>

<!-- end of navigation bar <!-->


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4 " action="signup_details.php " method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" required />
                      <label class="form-label" for="name">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control" required />
                      <label class="form-label" for="email">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" required />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="repeat_password"  name="repeat_password" class="form-control"  required />
                      <label class="form-label" for="repeat_password">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" required />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="termservice.php">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                   <input type="submit" value="sign up" class="btn btn-primary" name="submit">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="web/logo.png" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>