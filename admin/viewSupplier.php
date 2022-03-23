<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<title>Bakery Software - Admin View Supplier</title>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include_once('topbar.php'); ?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once('sidebar.php'); ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">View Supplier</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Suppliers List</h4>
                                    <div class="table-responsive">
                                        <label class="text-muted" style="float: right;">Total Suppliers (
                                            <span data-plugin="counterup">1</span>)</label>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>EntryDate</th>
                                                    <th>Supplier Name</th>
                                                    <th>Mobile</th>
                                                    <th>Balance</th>
                                                    <!--                                                 <th>Warehouse</th>  
                                                <th>ProductName</th>  
                                                <th>Weight</th>
                                                <th>Quantity</th>
                                                <th>Rate</th>
                                                <th>NetAmount</th>
                                                <th>PaidAmount</th> 
                                                <th>Balance</th>    -->
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>01-03-2021</td>
                                                    <td>Muhammad Umer</td>
                                                    <td>12345 - 1234567</td>
                                                    <td>1234</td>
                                                    <!--                                                 <td>Asif Store</td>    
                                                <td>Rice Pack</td> 
                                                <td>5kg</td>      
                                                <td>2</td>
                                                <td>350</td>
                                                <td>Rs.700</td>
                                                <td>Rs.600</td>
                                                <td>Rs.100</td> -->

                                                    <td>
                                                <button class="btn btn-warning">Edit</button>
                                               <button class="btn btn-danger">Delete</button>      
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    include_once('validation.php') ?>
    <?php include_once('footer.php'); ?>