<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>


<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="<?=base_url()?>assets/media/loginText.png" id="icon" alt="loginHeading" />
    </div>

    <form action="<?= base_url()?>public/login" method="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Enter Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password" required>
      <input type="submit" class="fadeIn fourth" name="btnLogIn" id="brnLogIn" value="Log-In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="<?=base_url()?>public/signUp">Sign_Up</a>
    </div>

  </div>
</div>