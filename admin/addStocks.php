
<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_stock($_POST['txtdate'],$_POST['txtware'],$_POST['txtpro'],$_POST['txtcode'],$_POST['txtquan'],$_POST['txtunit'],$_POST['txtper'],$_POST['txtsell'],$_POST['txtveh'],$_POST['txtgate'],$_POST['txtbatch'],$_POST['txtsup']);
}

?>
<title>Bakery Software - Admin Add Stocks</title>

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
                                <h4 class="mb-0">Add Stocks</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Stocks</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="custom-validation" autocomplete="off" method="post">
                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Entry Date *</label>
                                                        <div>
                                                            <input name="txtdate" type="date" id="today" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Warehouse *</label>
                                                        <select name="txtware" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                            <option value="0">Select Warehouse</option>
                                                            <?php $obj->warehouse();?>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Product *</label>
                                                        <select name="txtpro" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                            <option value="0">Select Product</option>
                                                          
                                                        </select>
                                                    </div> -->
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Product Name *</label>
                                                        <div>
                                                            <input name="txtpro" type="text" class="form-control" placeholder="Enter Quantity" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Product Code *</label>
                                                        <div>
                                                            <input name="txtcode" type="text" class="form-control" placeholder="Enter Quantity" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Quantity *</label>
                                                        <div>
                                                            <input name="txtquan" type="text" class="form-control" placeholder="Enter Quantity" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Unit *</label>
                                                        <div>
                                                        <input name="txtunit" type="text" class="form-control" placeholder="Enter Unit" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Per Box/Per Price *</label>
                                                        <div>
                                                            <input name="txtper" type="number" class="form-control" placeholder="Per Box/Per Price" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Selling Price *</label>
                                                        <div>
                                                            <input name="txtsell" type="number" class="form-control" placeholder="Only text" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Vehicle Number *</label>
                                                        <div>
                                                            <input name="txtveh" type="text" class="form-control" placeholder="Only text" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Gate Pass *</label>
                                                        <div>
                                                            <input name="txtgate" type="text" class="form-control" placeholder="Enter Gatepass" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2" data-select2-id="10">
                                                        <label class="form-label" for="input-mask">Batch Number *</label>
                                                        <div>
                                                            <input name="txtbatch" type="text" id="input-mask" class="form-control input-mask">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label" for="input-mask">Supplier *</label>
                                                        <select name="txtsup" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                            <option value="0">Select Supplier</option>
                                                            <?php $obj->supplier();?>
                                                        </select>
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



    <?php include_once('footerLinks.php');
    include_once('validation.php');
    ?>
<?php include_once('footer.php'); ?>
</body>