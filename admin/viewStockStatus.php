<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<title>Bakery Software - Admin Stock Status</title>
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
                                <h4 class="mb-0">View Stock Status</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Search Stock Status</h4>
                                 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="custom-validation" action="#">
                                                <div class="form-group-row row">
                                                    <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">City *</label>
                                                        <select class="form-control select2">
                                                            <option>Select</option>
                                                            <optgroup label="Backend Developer">
                                                                <option value="">Muahammad Umer</option>
                                                            </optgroup>
                                                            <optgroup label="Graphics">
                                                                <option value="">Saim Siddiqui</option>
                                                                <option value="">Azmeer Ali</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">Warehouse *</label>
                                                        <select class="form-control select2">
                                                            <option>Select</option>
                                                            <optgroup label="Backend Developer">
                                                                <option value="">Muahammad Umer</option>
                                                            </optgroup>
                                                            <optgroup label="Graphics">
                                                                <option value="">Saim Siddiqui</option>
                                                                <option value="">Azmeer Ali</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Year *</label>
                                                        <div class="position-relative" id="datepicker5">
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-container='#datepicker5' data-date-format="yyyy" data-date-min-view-mode="2" required>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                                        Search
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title"> Stock Status List</h4>
            
                                 <div class="table-responsive"> 
                     <label class="text-muted" style="float: right;">Total Stock Status (<span data-plugin="counterup">1</span>) </label>  

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>ProductName</th>
                                                <th>Warehouse&City</th>
                                                <th>Quantity</th>
                                                <th>P.Price</th>
                                                <th>S.Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Biscuits</td>
                                                <td>Gulshan warehouse (Karachi)</td>
                                                <td>200 PCs</td>
                                                <td>1000 Rs</td>
                                                <td>2000 Rs</td>
                                              
                                              

                                                <td><a href="#"><button type="button" class="btn btn-warning waves-effect waves-light">
                                                            Update
                                                        </button></a>
                                                        <a href="#"><button type="button" class="btn btn-danger waves-effect waves-light">
                                                            Delete
                                                        </button></a></td>

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

</body>

