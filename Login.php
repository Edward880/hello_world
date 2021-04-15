<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Benedit Restaurant/Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
  <div class="container">

  <div class="alert alert-primary">
    
    <center><h1>Welcome to Benedict Restaurant</h1></center>
    </div>

    <div class="row">
      <div class="col-4">
         
          <img src="https://dynamic.brandcrowd.com/preview/logodraft/17362652-9c3d-4b9e-a391-835dd1dff4d0/image/large.png" alt="logo" class="img-fluid"></a>"
      </div>
      <div class="col">

          <form method="POST" action="Login.php">
             <?php include('errors.php'); ?>

             </div>

             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required="required" value="<?php echo $email;  ?>"
          
            </div>
          
             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required="required" value="<?php echo $password;  ?>"
          
            </div><br>
        
        <button name="Login" type="submit" class="btn btn-primary">Login</button>
      </form>

     
     
      Don't have an account? <a style='text-decoration: none;'href="register.php"><span>Create Account</span></a>
        




     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


 
      
</body>
</html>