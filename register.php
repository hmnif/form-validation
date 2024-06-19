<?php
  $emailErr = $passwordErr = $cpasswordErr = "";
  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(empty($email)) {
      $emailErr = "Email is Required";
    }else{
      $email = trim($email);
      if(substr($email, -10) !== "@gmail.com") {
        $emailErr = "Email must end with @gmail.com";
      }
    }

    if(empty($password)) {
      $paswordErr = "Password is Required";
    }else{
      if(strlen($password) < 8) {
        $passwordErr = "Password at least 8 characters";
      }
    }

    if(empty($cpassword)) {
      $cpasswordErr = "Confirmation Password is Required";
    } else {
      if($password !== $cpassword) {
        $cpasswordErr = "Confirmation Password does not match";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <style>
    .container {
      display: flex;
      justify-content: center; 
      align-items: center; 
      height: 100vh; 
      background-color: brown;
    }

    .form-container {
      background-color: white;
      padding: 4rem;
      border-radius: 2rem;
    }

    h3 {
      text-align:center; 
      font-size:x-large;
    }

    span {
      color: red;
    }
  </style>
</head>
<body>
  <class class="container">
    <class class="form-container">
      <h3>Register</h3>
      <form method="post">
        <label for="email">Email</label>
        <br>
        <input type="text" name="email" size="30">
        <span><br><?php echo $emailErr ?></span>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" size="30">
        <span><br><?php echo $passwordErr ?></span>
        <br>
        <label for="cpassword">Confirmation Password</label>
        <br>
        <input type="password" name="cpassword" size="30">
        <span><br><?php echo $cpasswordErr ?></span>

        <br>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
    </class>
  </class>
</body>
</html>