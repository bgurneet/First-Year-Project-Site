<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <div class="container login-container">
    <div class="row">
        <div class="col-md-6 login">
            <?php echo '<h3>Login</h3>' ?>
            <form>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email *" value="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value="" />
              </div>
              <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
              </div>
              <div class="form-group">
                <a href="#" class="ForgetPwd">Forgot Password?</a>
              </div>
              <div class="form-group placeholder"></div>
              <div class="form-group placeholder"></div>
            </form>
          </div>


          <div class="col-md-6 reg-form">
            <?php echo '<h3>Register</h3>' ?>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Fullname *" value="" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email *" value="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
              </div>
              <div class="form-group">
                <input type="submit" class="btnSubmit" value="Register" />
              </div>
            </form>
          </div>
         </div>
  </div>
  <img class="logo" src="../assets/logo1.png">
  <script type="text/javascript" src="scripts.js"></script>
</body>
</html>
