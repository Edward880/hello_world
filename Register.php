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
                        Don't have an account? <a style='text-decoration: none;'href="register.php"><span>Create Account</span></a>
        
		<div class="row">
			<div class="col-4">
					<img src="https://dynamic.brandcrowd.com/preview/logodraft/17362652-9c3d-4b9e-a391-835dd1dff4d0/image/large.png" alt="logo"class="img-fluid"></a>"
			</div>
			<div class="col">

					<form method="POST" action="">
						<?php include('errors.php'); ?>

						 <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Full Name</label>
					    <input type="text" class="form-control" name="full_name" required="required" value="<?php echo $fullname;  ?>"
					
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="email" class="form-control" name="email" required="required" value="<?php echo $email;  ?>"
					
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Phone</label>
					    <input type="number" class="form-control" name="phone" required="required" value="<?php echo $phone;  ?>"
					
					  </div>

					    <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" required="required" value="<?php echo $password;  ?>"
					
					  </div>
					  
			  
			  <button name="register" type="submit" class="btn btn-primary">Sign up</button>
			</form>
          
				//<?php
              
				//capture
				//
				//if (isset($_POST['register']))  {

                /*	$fullName = $_POST['full_name'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$password = $_POST['password'];

					//hash the password
			
				
	
					
					//
					$encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

					insertDataToTable($fullName,$email,$phone,$encryptedPassword);

				}

				function insertDataToTable($fullName,$email,$phone,$password){
					//connection with the db
					require('dbconnect.php');
					session_start();

					$sql = "INSERT INTO `customer`(`full_name`, `email`, `phone`,`password`) VALUES (?,?,?,?)";

					
					if($stmt = mysqli_prepare($conn,$sql)) {

						//bind values
						mysqli_stmt_bind_param($stmt,"ssis",$param_fullname,$param_email,$param_phone,$param_password);
						//param variables bind them

						$param_fullname = $fullName;
						$param_email = $email;
						$param_phone = $phone;
						$param_password = $password;

						//execute the query
						if (mysqli_stmt_execute($stmt)) {
							# code...
							echo "Registered Successfully";
						header('location:login.php');
						}else{


							echo "<h4 style='color:red'>Something went wrong</h4>";
						}


					}else{
						
						echo "Something went wrong";

						echo mysqli_error($conn);

					}
            
					//close
					mysqli_close($conn);
                
				}
                */
				?>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

				
			</div>
		</div>
		
	</div>
	 
</body>


</html>