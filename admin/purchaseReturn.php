<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<title>Bakery Software - Admin Purchase Return</title>
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
                                <h4 class="mb-0">Purchase Return</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Purchase Return List</h4>
                                    <!-- <form class="repeater" enctype="multipart/form-data">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Select Warehouse</label>
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
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Select Warehouse</label>
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
                                                <div class="col-lg-2 col-sm-12 mb-2">
                                                    <label class="form-label" for="input-mask">Remove Row</label>
                                                    <div>
                                                        <button data-repeater-delete type="button" class="btn btn-danger float-right"><i class="uil-minus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group-row row">
                                    <div class="col-lg-6 col-sm-12 mb-2">
                                        <button data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0 btn btn-secondary waves-effect waves-light me-1"><i class="uil-plus"></i></button>
                                        <button type="reset" class="btn btn-secondary waves-effect waves-light me-1">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                                </form> -->
                                    <div class="table-responsive">
                        <label class="text-muted" style="float: right;">Total Purchase Return (
                        <span data-plugin="counterup">1</span>)</label> 
                                        <table class="table price-table" id="price-table" border="1">
                                            <thead>
                                                <tr>
                                                    <th>Sno</th>
                                                    <th>InvoiceNumber</th>
                                                    <th>SupplierName</th>
                                                    <th>ProductName</th>
                                                    <th>Quantity</th>
                                                    <th>Rate</th>
                                                    <th>Weight</th>
                                                    <th>GrossWeight</th>
                                                   <td>Average</th>
                                                   <td>FRT</th>
                                                   <td>TFRT</th>
                                                   <td>TPT</th>
                                                   <td>Amount</th>
                                                   <td>Discount</th>
                                                   <td>TotalAmount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr id="row_id" data-id="1" class="dynamic_row">
                        <td>
                                                        <input type="number" name="index[]" class="form-control index" value="1" readonly>
                                                    </td>

                                                   <td>
                                                        <input type="text" name="invno[]" class="form-control inv-no">
                                                    </td>

  <td>
                                                        <input type="text" name="sname[]" class="form-control s-name" readonly="">
                                                    </td>

                                            <td>
                                                        <input type="text" name="pname[]" class="form-control p-name" readonly="">
                                                    </td>

                                                    <td>
                                                        <input type="number" name="qty[]" class="form-control qty" readonly>
                                                    </td>
                                             <td>
                                                        <input type="number" name="rate[]" class="form-control rate" readonly>
                                                    </td>
                                        <td>
                                                        <input type="text" name="weight[]" class="form-control weight" readonly>
                                                    </td>
   <td>
                                                        <input type="text" name="gweight[]" class="form-control g-weight" readonly>
                                                    </td>

             <td>
                                                        <input type="text" name="avg[]" class="form-control avg" readonly>
                                                    </td>                                          
             <td>
                                                        <input type="text" name="frt[]" class="form-control frt" readonly>
                                                    </td>                                       
                                           <td>
                                                        <input type="text" name="tfrt[]" class="form-control t-frt" readonly>
                                                    </td>                                               
                        <td>
                                                        <input type="text" name="tpt[]" class="form-control tpt" readonly>
                                                    </td>                   


                        <td>
                                                        <input type="text" name="amount[]" class="form-control amt" readonly>
                                                    </td> 

             <td>
                                                        <input type="text" name="discount[]" class="form-control dis" readonly>
                                                    </td>

                            <td>
                                                        <input type="text" name="total[]" class="form-control total" readonly>
                                                    </td>                                                                 
                                                    <td>
                                                        <button type="button" id="0" class="btn btn-primary addfeilds"><i class="fa fa-plus "></i></button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tr>
                                                <th colspan="12"> Total Balance </th>
                                            </tr>

                                            <tr class="dynamic_row" data-id="1">

                                                <td><b>Balance</b></td>
                                                <td>
                                              <b> = 0 </b>

                                                </td>
                                               
                                            </tr>
                                        </table>
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
    <?php include_once('footerLinks.php');
    include_once('validation.php') ?>
   <?php include_once('footer.php'); ?>

    <script>
        function add_feilds(index) {
            var html = "";
            html += '<tr id="row' + index + '" data-id="' + index + '" class="dynamic_row">';
            html += '<td><input type="text" name="index[]" class="form-control index" value="' + index + '" readonly></td>';
            html += '<td>';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control stock" id="stock' + index + '" name="stock[]" placeholder="stock" min="1" data-id="' + index + '"> <input type="hidden"  name="thisstock[]" class="thisstock" id="thisstock' + index + '">';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td colspan="2">';
            html += '<div class="row ">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control unit_cost" id="unit_cost' + index + '" name="unit_cost[]" placeholder="unit_cost" min="1" data-id="' + index + '"><input type="hidden"  name="cost[]" class="cost" id="cost' + index + '" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td colspan="2">';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control unit_price" id="unit_price' + index + '" name="unit_price[]" placeholder="unit_price" min="1" data-id="' + index + '" ><input type="hidden"  name="price[]" id="price' + index + '" class="price" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td>';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control total_cost" id="total_cost' + index + '" name="total_cost[]" placeholder="total_cost" data-id="' + index + '" readonly><input type="hidden"  name="total[]" id="total' + index + '"  class="total" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += ' <td><button id="' + index + '" type="button" class="btn btn-danger removefeilds"><i class="fa fa-remove "></i></button></td>';
            html += '<tr>';
            $(".list").append(html);

        }
        // end of add feilds function//

        // reset feilds function //
        function reset_feilds(index = 1) {

            var html = "";
            html += '<tr id="row' + index + '" data-id="' + index + '" class="dynamic_row">';
            html += '<td><input type="text" name="index[]" class="form-control index" value="' + index + '" readonly></td>';
            html += '<td>';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control stock" id="stock' + index + '" name="stock[]" placeholder="stock" min="1" data-id="' + index + '"> <input type="hidden"  name="thisstock[]" class="thisstock" id="thisstock' + index + '">';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td colspan="2">';
            html += '<div class="row ">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control unit_cost" id="unit_cost' + index + '" name="unit_cost[]" placeholder="unit_cost" min="1" data-id="' + index + '"><input type="hidden"  name="cost[]" class="cost" id="cost' + index + '" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td colspan="2">';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control unit_price" id="unit_price' + index + '" name="unit_price[]" placeholder="unit_price" min="1" data-id="' + index + '" ><input type="hidden"  name="price[]" id="price' + index + '" class="price" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += '<td>';
            html += '<div class="row">';
            html += '<div class="col-sm-12">';
            html += '<input type="number" class=" form-control total_cost" id="total_cost' + index + '" name="total_cost[]" placeholder="total_cost" data-id="' + index + '" readonly><input type="hidden"  name="total[]" id="total' + index + '"  class="total" data-id="' + index + '" >';
            html += '</div>';
            html += '</div>';
            html += '</td>';
            html += ' <td><button id="' + index + '" type="button" class="btn btn-primary addfeilds"><i class="fa fa-plus "></i></button></td>';
            html += '<tr>';
            $(".list").html(html);

        }
        // end of reset feilds function//


        var thisindex = 0;
        $('body').on('click', '.addfeilds', function() {
            var index = [];
            $('.index').each(function() {
                index.push($(this).val());
            });
            for (i = 0; i < index.length; i++) {
                var thisindex = index[i];
                thisindex = parseInt(thisindex) + 1;
            }
            //add_feilds(thisindex)

        });
    </script>

</body>

</html>