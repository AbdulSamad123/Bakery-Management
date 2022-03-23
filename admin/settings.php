<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<title>Bakery Software - Admin Add Product</title>


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
                                <h4 class="mb-0">Settings</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mb-4">
                        <div class="col-xl-12">
                            <div class="card mb-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#company" role="tab">
                                            <i class="uil uil-user-circle font-size-20"></i>
                                            <span class="d-none d-sm-block">About Company</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#warehouse" role="tab">
                                            <i class="uil uil-clipboard-notes font-size-20"></i>
                                            <span class="d-none d-sm-block">Warehouse</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                            <i class="uil uil-envelope-alt font-size-20"></i>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab content -->
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="company" role="tabpanel">
                                        <div>
                                            <div class="row">
                                                <h5 class="font-size-16 mb-4">Company Details</h5>
                                                <form class="repeater" enctype="multipart/form-data">
                                                    <div data-repeater-list="group-a">
                                                        <div data-repeater-item="" class="row">
                                                            <div class="form-group-row row">

                                                                <div class="col-lg-6 col-sm-12 mb-2">
                                                                    <label class="form-label">Name *</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" placeholder="Name" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-12 mb-2">
                                                                    <label class="form-label" for="input-mask">City *</label>
                                                                    <div>
                                                                        <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '99999 - 9999999 - 9'">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-row row">
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label">Mobile *</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" placeholder="Name" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label" for="input-mask">Address *</label>
                                                                    <div>
                                                                        <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '99999 - 9999999 - 9'">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label" for="input-mask">Logo *</label>
                                                                    <div>
                                                                        <input type="file" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class=" col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label" for="input-mask">Remove Form</label>
                                                                    <div>
                                                                        <input data-repeater-delete="" type="button" class="btn btn-danger float-right" value="Delete">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-row row">
                                                        <div class="col-lg-6 col-sm-12 mb-2">
                                                            <input data-repeater-create="" type="button" class="btn btn-success mt-3 mt-lg-0 btn btn-secondary waves-effect waves-light me-1" value="Add">
                                                            <button type="reset" class="btn btn-secondary waves-effect waves-light me-1">
                                                                Reset
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="warehouse" role="tabpanel">
                                        <div>
                                            <div class="row">
                                                <h5 class="font-size-16 mb-4">Warehouse Details</h5>
                                                <form class="repeater" enctype="multipart/form-data">
                                                    <div data-repeater-list="group-a">
                                                        <div data-repeater-item="" class="row">
                                                            <div class="form-group-row row">
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label">City *</label>
                                                                    <div>
                                                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                                <option value="AK">Alaska</option>
                                                                                <option value="HI">Hawaii</option>
                                                                            </optgroup>
                                                                            <optgroup label="Pacific Time Zone">
                                                                                <option value="CA">California</option>
                                                                                <option value="NV">Nevada</option>
                                                                                <option value="OR">Oregon</option>
                                                                                <option value="WA">Washington</option>
                                                                            </optgroup>
                                                                            <optgroup label="Mountain Time Zone">
                                                                                <option value="AZ">Arizona</option>
                                                                                <option value="CO">Colorado</option>
                                                                                <option value="ID">Idaho</option>
                                                                                <option value="MT">Montana</option>
                                                                                <option value="NE">Nebraska</option>
                                                                                <option value="NM">New Mexico</option>
                                                                                <option value="ND">North Dakota</option>
                                                                                <option value="UT">Utah</option>
                                                                                <option value="WY">Wyoming</option>
                                                                            </optgroup>
                                                                            <optgroup label="Central Time Zone">
                                                                                <option value="AL">Alabama</option>
                                                                                <option value="AR">Arkansas</option>
                                                                                <option value="IL">Illinois</option>
                                                                                <option value="IA">Iowa</option>
                                                                                <option value="KS">Kansas</option>
                                                                                <option value="KY">Kentucky</option>
                                                                                <option value="LA">Louisiana</option>
                                                                                <option value="MN">Minnesota</option>
                                                                                <option value="MS">Mississippi</option>
                                                                                <option value="MO">Missouri</option>
                                                                                <option value="OK">Oklahoma</option>
                                                                                <option value="SD">South Dakota</option>
                                                                                <option value="TX">Texas</option>
                                                                                <option value="TN">Tennessee</option>
                                                                                <option value="WI">Wisconsin</option>
                                                                            </optgroup>
                                                                            <optgroup label="Eastern Time Zone">
                                                                                <option value="CT">Connecticut</option>
                                                                                <option value="DE">Delaware</option>
                                                                                <option value="FL">Florida</option>
                                                                                <option value="GA">Georgia</option>
                                                                                <option value="IN">Indiana</option>
                                                                                <option value="ME">Maine</option>
                                                                                <option value="MD">Maryland</option>
                                                                                <option value="MA">Massachusetts</option>
                                                                                <option value="MI">Michigan</option>
                                                                                <option value="NH">New Hampshire</option>
                                                                                <option value="NJ">New Jersey</option>
                                                                                <option value="NY">New York</option>
                                                                                <option value="NC">North Carolina</option>
                                                                                <option value="OH">Ohio</option>
                                                                                <option value="PA">Pennsylvania</option>
                                                                                <option value="RI">Rhode Island</option>
                                                                                <option value="SC">South Carolina</option>
                                                                                <option value="VT">Vermont</option>
                                                                                <option value="VA">Virginia</option>
                                                                                <option value="WV">West Virginia</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label">Warehouse Name *</label>
                                                                    <div>
                                                                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                                <option value="AK">Alaska</option>
                                                                                <option value="HI">Hawaii</option>
                                                                            </optgroup>
                                                                            <optgroup label="Pacific Time Zone">
                                                                                <option value="CA">California</option>
                                                                                <option value="NV">Nevada</option>
                                                                                <option value="OR">Oregon</option>
                                                                                <option value="WA">Washington</option>
                                                                            </optgroup>
                                                                            <optgroup label="Mountain Time Zone">
                                                                                <option value="AZ">Arizona</option>
                                                                                <option value="CO">Colorado</option>
                                                                                <option value="ID">Idaho</option>
                                                                                <option value="MT">Montana</option>
                                                                                <option value="NE">Nebraska</option>
                                                                                <option value="NM">New Mexico</option>
                                                                                <option value="ND">North Dakota</option>
                                                                                <option value="UT">Utah</option>
                                                                                <option value="WY">Wyoming</option>
                                                                            </optgroup>
                                                                            <optgroup label="Central Time Zone">
                                                                                <option value="AL">Alabama</option>
                                                                                <option value="AR">Arkansas</option>
                                                                                <option value="IL">Illinois</option>
                                                                                <option value="IA">Iowa</option>
                                                                                <option value="KS">Kansas</option>
                                                                                <option value="KY">Kentucky</option>
                                                                                <option value="LA">Louisiana</option>
                                                                                <option value="MN">Minnesota</option>
                                                                                <option value="MS">Mississippi</option>
                                                                                <option value="MO">Missouri</option>
                                                                                <option value="OK">Oklahoma</option>
                                                                                <option value="SD">South Dakota</option>
                                                                                <option value="TX">Texas</option>
                                                                                <option value="TN">Tennessee</option>
                                                                                <option value="WI">Wisconsin</option>
                                                                            </optgroup>
                                                                            <optgroup label="Eastern Time Zone">
                                                                                <option value="CT">Connecticut</option>
                                                                                <option value="DE">Delaware</option>
                                                                                <option value="FL">Florida</option>
                                                                                <option value="GA">Georgia</option>
                                                                                <option value="IN">Indiana</option>
                                                                                <option value="ME">Maine</option>
                                                                                <option value="MD">Maryland</option>
                                                                                <option value="MA">Massachusetts</option>
                                                                                <option value="MI">Michigan</option>
                                                                                <option value="NH">New Hampshire</option>
                                                                                <option value="NJ">New Jersey</option>
                                                                                <option value="NY">New York</option>
                                                                                <option value="NC">North Carolina</option>
                                                                                <option value="OH">Ohio</option>
                                                                                <option value="PA">Pennsylvania</option>
                                                                                <option value="RI">Rhode Island</option>
                                                                                <option value="SC">South Carolina</option>
                                                                                <option value="VT">Vermont</option>
                                                                                <option value="VA">Virginia</option>
                                                                                <option value="WV">West Virginia</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label">Address *</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" placeholder="Name" required="">
                                                                    </div>
                                                                </div>
                                                                <div class=" col-lg-3 col-sm-12 mb-2">
                                                                    <label class="form-label" for="input-mask">Remove Form</label>
                                                                    <div>
                                                                        <input data-repeater-delete="" type="button" class="btn btn-danger float-right" value="Delete">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-row row">
                                                        <div class="col-lg-6 col-sm-12 mb-2">
                                                            <input data-repeater-create="" type="button" class="btn btn-success mt-3 mt-lg-0 btn btn-secondary waves-effect waves-light me-1" value="Add">
                                                            <button type="reset" class="btn btn-secondary waves-effect waves-light me-1">
                                                                Reset
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <div>
                                            <div data-simplebar style="max-height: 430px;">
                                                <div class="d-flex align-items-start border-bottom py-4">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img class="rounded-circle avatar-xs" src="assets/images/users/avatar-3.jpg" alt="avatar-3 images">
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-15 mb-1">Marion Walker <small class="text-muted float-end">1 hr ago</small></h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting .</p>

                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                        <div class="d-flex align-items-start mt-4">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img class="rounded-circle avatar-xs" src="assets/images/users/avatar-4.jpg" alt="avatar-4 images">
                                                            </div>

                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-15 mb-1">Shanon Marvin <small class="text-muted float-end">1 hr ago</small></h5>
                                                                <p class="text-muted">It will be as simple as in fact, it will be Occidental. To it will seem like simplified .</p>


                                                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block">
                                                                    <i class="mdi mdi-reply"></i> Reply
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start border-bottom py-4">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img class="rounded-circle avatar-xs" src="assets/images/users/avatar-5.jpg" alt="avatar-5 images">
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-15 mb-1">Janice Morgan <small class="text-muted float-end">2 hrs ago</small></h5>
                                                        <p class="text-muted">To achieve this, it would be necessary to have uniform pronunciation.</p>

                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-start border-bottom py-4">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img class="rounded-circle avatar-xs" src="assets/images/users/avatar-7.jpg" alt="avatar-7 images">
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-15 mb-1">Patrick Petty <small class="text-muted float-end">3 hrs ago</small></h5>
                                                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit </p>

                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border rounded mt-4">
                                                <form action="#">
                                                    <div class="px-2 py-1 bg-light">

                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-link"></i></button>
                                                            <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-smile"></i></button>
                                                            <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-at"></i></button>
                                                        </div>

                                                    </div>
                                                    <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>

                                                </form>
                                            </div> <!-- end .border-->
                                        </div>
                                    </div>
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


</body>

    <?php include_once('footerLinks.php'); ?>
<?php include_once('footer.php'); ?>