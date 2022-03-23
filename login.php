<?php include_once('header.php'); ?>
<?php include('headerLinks.php'); ?>
<title>Bakery Software - Sign In</title>
</head>
<body>
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <div class="mb-4">
                        <h3>Sign In</h3>
                        <p class="mb-4"></p>
                     </div>
                     <div class="row success-message-div">
                        <div class="col-sm-12">
                           <div class="alert alert-success" role="alert"><strong class="successtxt "></strong></div>
                        </div>
                     </div>
                     <div class="row error-message-div">
                        <div class="col-sm-12">
                           <div class="alert alert-danger" role="alert"><strong class="errortxt"></strong><strong><span id="timer" class="timer"> </span></strong></div>
                        </div>
                     </div>
                     <form action="{action}" method="{method}" class="loginform">
                        <div class="form-group first">
                           <label for="username">Username</label>
                           <input type="text" name="username" class="form-control username" id="username">
                        </div>
                        <div class="errorusername"></div>
                        <br>
                        <div class="form-group last mb-3">
                           <label for="password">Password</label>
                           <input type="password" name="password" class="form-control password" id="password">     
                        </div>
                        <div class="errorpassword"></div>
                        <div class="d-flex mb-5 align-items-center">
                           <label class="control control--checkbox mb-0">
                              <span class="caption">Show Password</span>
                              <input type="checkbox" />
                              <div class="control__indicator"></div>
                           </label>
                           <span class="ml-auto"><a href="submitOTP.php" class="forgot-pass">Forgot Password</a></span>
                        </div>
                        <input type="button" value="Sign In" class="btn btn-block btn-primary btnlogin">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include_once('footerLinks.php'); ?>
</body>