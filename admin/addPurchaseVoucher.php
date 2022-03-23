<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<title>Bakery Software - Admin Purchase Voucher</title>
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
                                <h4 class="mb-0">Purchase Voucher</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Purchase Voucher Details</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="custom-validation" action="#">
                                                <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Invoice Number *</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" disabled />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Date</label>
                                                        <input type="date" id="today" class="form-control" required />
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Gate Pass *</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" />
                                                        </div>
                                                    </div>
                                                </div>


                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-12 mb-2">
                                                                <div>
                                                              <label class="form-label">Supplier</label>    

                                                                    <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Supplier">
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

                                                            <div class="col-lg-4 col-sm-12 mb-2">
                                                                <div>
                                                              <label class="form-label">Warehouse</label>       

                                                                    <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Warehouse">
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

                                                        </div>


                                                <hr>
                                           <!--      <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Supplier Name *</label>
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
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Products *</label>
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
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label" for="input-mask">Quantity *</label>
                                                        <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2" data-select2-id="10">
                                                        <label class="form-label" for="input-mask">Rate *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control Finput-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label" for="input-mask">Weight *</label>
                                                        <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label" for="input-mask">Gross Weight *</label>
                                                        <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Average *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">FRT *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">T - FRT *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">Amount *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label class="form-label">TPT *</label>
                                                        <div>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '9999 - 9999999'">
                                                        </div>
                                                    </div>
                                                </div> -->



<h4 class="card-title mb-4">Product Details</h4>

         <div class="table-responsive">
                                        <table class="table price-table" id="price-table" border="1">
                                            <thead>
                                                <tr>
                                                    <th>Sno</th>
                                                    <th>Products</th>
                                                    <th>Quantity</th>
                                                    <th>Stock</th>
                                                    <th>Rate</th>
                                                    <th>Unit</th>
                                                    <th>PerBoxPrice</th>
                                                    <th>BuyingPrice</th>
                                                    <th>SellingPrice</th>
                                                    <th>Weight</th>
                                                    <th>GrossWeight</th>
                                                    <th>Average</th>
                                                    <th>FRT</th>
                                                    <th>TFRT</th>
                                                    <th>Amount</th>
                                                    <th>TPT</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr id="row_id" data-id="1" class="dynamic_row">
                                                    <td style="width:70px;">
                                                        1
                                                    </td>



                                                    <td style="width:70px;">
                                                                 <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="text" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>

                                                    


                                               
                                                    <td>
                                                        <div class="row">
                                                           <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>



                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="row">
                                                           <div class="col-sm-12">
                                                         
                                                            <select class="form-control">
                                                                <option>KG</option>
                                                                <option>PCs</option>
                                                                <option>Tons</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="row">
                                                           <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>



                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                            <input type="number" class=" form-control unit_price" id="unit_price" name="unit_price[]" placeholder="" min="1">
                                                                <input type="hidden" name="total[]" class="total" data-id="1" id="total">

                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <button type="button" id="0" class="btn btn-primary addfeilds"><i class="fa fa-plus "></i></button>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                                
                                                <hr>

                               <h4 class="card-title">Payment Details</h4>

                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Amount</label>
                                                        <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" readonly />
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Labour Expense</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Product Expense</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Discount</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Previous Balance</label>
                                                        <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" readonly />
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Total Balance</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">Payment Method</label>
                                                        <div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input payment-method" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Cash</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input payment-method" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked="">
                                                                <label class="form-check-label" for="inlineRadio2">Cheque</label>
                                                            </div>
  <div class="form-check form-check-inline">
                                                                <input class="form-check-input payment-method" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3">
                                                                <label class="form-check-label" for="inlineRadio2">Credit</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-12 mb-2">
                                                        <label class="form-label">Balance</label>
                                                        <div>
                                                            <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-row row">
                                                    <div class="col-lg-6 col-sm-12 mb-2">
                                                        <button type="reset" class="btn btn-secondary waves-effect waves-light me-1">
                                                            Reset
                                                        </button>
                                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1">
                                                            Submit
                                                        </button>
                                                    </div>
<div class="col-lg-6 col-sm-12 mb-2">
      <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">Bank Name</label>
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="Bank Name" />
                                                        </div>
                                                    </div>
                                   
                                   <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">Account No</label>
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="Account No" />
                                                        </div>
                                                    </div>

                                   
                                   <div class="col-lg-6 col-sm-12 mb-2">
                                                        <label class="form-label">Cheque No</label>
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="Cheque No" />
                                                        </div>
                                                    </div>
                                                                           

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