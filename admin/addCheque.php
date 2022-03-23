<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_cheque($_POST['txtent'],$_POST['txtname'],$_POST['txtchq'],$_POST['txtdate'],$_POST['txtbank'],$_POST['txtstatus']);
}

?>
<title>Bakery Software - Admin Add Cheque</title>
<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('topbar.php'); ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include('sidebar.php'); ?>

        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Add Cheque</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Cheque Details</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="custom-validation" autocomplete="off" method="post">
                                             <div class="form-group-row row">
                                    
                                            
                                  <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Entry Date</label>
                                                             <div>
                                                   
                                                        <input name="txtent" type="date" id="today" class="form-control" required />
                                                    </div>
                                                </div>
        

                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Person Name</label>
                                                        <div>
                                                           <input name="txtname" type="text" id="today" class="form-control" required placeholder="Person Name" />
                                                        </div>
                                                    </div>



                                                <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Cheque No</label>
                                                             <div>
                                                   
                                                        <input name="txtchq" type="text" id="today" class="form-control" required placeholder="Cheque No" />
                                                    </div>
                                                </div>
                                                </div>


                                                <div class="form-group-row row">
                                    
                                            
                                                 <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Cheque Date</label>
                                                             <div>
                                                   
                                                        <input name="txtdate" type="date" id="today" class="form-control" required />
                                                    </div>
                                                </div>
                                       

                                              <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Bank Name</label>
                                                             <div>
                                                   
                                                        <input name="txtbank" type="text" id="today" class="form-control" required placeholder="Bank Name" />
                                                    </div>
                                                </div>


                                               <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Status</label>
                                                        <div>
                                                            <input name="txtstatus" id="input-mask" class="form-control remarks" placeholder="Status" >
                                                        </div>
                                                    </div>
                                                        </div>
                                                <div class="form-group-row">
                                                    <div class="col-lg-12 col-sm-12 mb-2">
                                                        <button type="reset" class="btn btn-secondary waves-effect waves-light me-1">
                                                            Reset
                                                        </button>
                                                        <button name="sub" type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                                            Submit
                                                        </button>
                                                    </div>
               
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>
            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>



</body>
    <?php include_once('footerLinks.php');
    include_once('validation.php') ?>
   <?php include_once('footer.php'); ?>