<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first" style="margin-left: 20px;">
      <img src="<?=base_url()?>assets/media/signUpText.png" id="icon" alt="loginHeading" />
    </div>

    <form action="#" method="POST">
      <input type="text" id="txtFirstName" class="fadeIn second" name="txtFirstName" placeholder="Enter FirstName" >
      <input type="text" id="txtLastNAme" class="fadeIn third" name="txtLastName" placeholder="Enter LastName">
      <input type="text" id="txtEmail" class="fadeIn second" name="txtEmail" placeholder="Enter Email">
      <input type="tel" id="txtMobileNumber" class="fadeIn second" name="txtMobileNumber" placeholder="Enter MobileNumber">
      <input type="password" id="txtPassword" class="fadeIn third" name="txtPassword" placeholder="Enter Password">
      <input type="password" id="txtConfirmPassword" class="fadeIn third" name="txtConfirmPassword" placeholder="Enter Confirm Password">
      <input type="submit" class="fadeIn fourth" name="btnSignUp" id="btnSignUp" value="Sign-Up">
    </form>
  </div>
</div>