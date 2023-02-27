<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up Form by Colorlib</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/login_signup.css">
</head>

<body>

  <div class="main">

    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" class="register-form" id="register-form" action="<?= base_url() ?>public/signUp">
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="txtFirstName" id="txtFirstName" placeholder="Your FristName" />
              </div>
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="txtLastName" id="txtLastName" placeholder="Your LastName" />
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="tel" name="txtMobileNumber" id="txtMobileNumber" placeholder="Your MobileNumber" />
              </div>
              <div class="form-group">
                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="txtPassword" id="txtPassword" placeholder="Password" />
              </div>
              <div class="form-group">
                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Confirm your password" />
              </div>
              <div class="form-group">
                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
              </div>
              <div class="form-group form-button">
                <input type="submit" name="btnSignUp" id="btnSignUp" class="form-submit" value="Register" />
              </div>
            </form>
          </div>
          <div class="signup-image">
            <figure><img src="<?=base_url()?>assets/media/signup-image.jpg" alt="sing up image"></figure>
            <a href="<?= base_url() ?>public/login" class="signup-image-link">I am already member</a>
          </div>
        </div>
      </div>
    </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>