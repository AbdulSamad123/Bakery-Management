
<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_warehouse($_POST['txtname'],$_POST['txtcity']);
}

?>
<title>Bakery Software - Admin Add WareHouse</title>

<body>
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
                                <h4 class="mb-0">Add Warehouse</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Warehouse</h4>
                                    <form class="repeater" autocomplete="off" method="post">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class="form-group-row row">
                                                    <div class="col-lg-5 col-sm-12 mb-2">
                                                        <label class="form-label">Name *</label>
                                                        <div>
                                                            <input name="txtname" type="text" class="form-control" placeholder="Name" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-12 mb-2">
                                                        <label class="form-label" for="input-mask">City *</label>
                                                        <div>
                                                            <input name="txtcity" id="input-mask" class="form-control input-mask">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-row row">
                                            <div class="col-lg-6 col-sm-12 mb-2">
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
                    <!-- end row -->
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
    <script>
        ClassicEditor
            .create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>
    <?php include_once('footerLinks.php');
    include_once('validation.php');
    ?>
<?php include_once('footer.php'); ?>