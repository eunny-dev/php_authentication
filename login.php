<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 </head>
   <link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 " style="text-align: centre;" >


<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="access_login.php" method="POST">
      <p style="text-align: center ;">sign in</p>
      <br>
      <br>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="loginName" class="form-control" placeholder="Enter your email address" required/>
        <label class="form-label" for="loginName">Email:</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="signup.php">Register</a></p>
      </div>
    </form>
  </div>
 
    </div>
    </div>
</div>


</body>
</html>