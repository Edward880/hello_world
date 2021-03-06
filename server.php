<?php
session_start();

// initializing variables
$fullname = "";
$email    = "";
$phone    = "";
$password = "";
$errors   = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'benedictrestaurant');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone  = mysqli_real_escape_string($db, $_POST['phone']);
   $password= mysqli_real_escape_string($db, $_POST['password']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($full_name)) { array_push($errors, "fullname is required"); }
  
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_1) {
    array_push($errors, "The two passwords do not match");
    }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $customer_check_query = "SELECT * FROM customer WHERE email='$email' OR password = '$password' LIMIT 1";
  $result = mysqli_query($db, $customer_check_query);
  $customer = mysqli_fetch_assoc($result);
  
  if ($customer) { // if user exists
    if ($customer['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($customer['password'] === $password) {
      array_push($errors, "password already exists");
    }
  }

   //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password, PASSWORD_BCRYPT);//encrypt the password before saving in the database

  	$query = "INSERT INTO `customer`(`full_name`, `email`, `phone`,`password`) 
              VALUES (`full_name`, `email`, `phone`,`password`)";
    
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
     header('location:Login.php');
  }
}

  
  
  // LOGIN USER
  
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }  
  $query = "SELECT * FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) > 0) {
    while ($row= mysqli_fetch_array($results))
    {
       if (password_verify($password ,$row["password"]))
        {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location:index.php');
  	     
        }
    }
  	 }else {
  		array_push($errors, "Wrong username/password combination");
  	}
    
}

?>