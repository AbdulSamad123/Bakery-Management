<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <?php include('./headerLinks.php'); ?>

  <title>Login #7</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/forget_pass.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Forget Password</h3>
                <p class="mb-4">Enter your new password.</p>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">New Password</label>
                  <input type="password" class="form-control" id="username">

                </div>
                <br>
                <div class="form-group last mb-4">
                  <label for="password">Confirm Password</label>
                  <input type="password" class="form-control" id="password">

                </div>
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">I, hereby agree to change my password.</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>

                </div>

                <input type="submit" value="Update Password" class="btn btn-block btn-primary">


            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <?php include('./footerLinks.php'); ?>
</body>

</html>