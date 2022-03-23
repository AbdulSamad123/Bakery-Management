<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>

<title>Sign up</title>

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
                                <h3>Sign Up</h3>
                                <p class="mb-4"></p>
                            </div>
                            <form action="" method="post">
                                <div class="form-group first">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div><br>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username">
                                </div>
                                <br>
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="email" class="form-control" id="username">
                                </div>
                                <br>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">I, agree with all terms & conditions.</span>
                                        <input type="checkbox" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <input type="button" value="Sign up" class="btn btn-block btn-primary">


                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php include_once('footerLinks.php'); ?>
</body>