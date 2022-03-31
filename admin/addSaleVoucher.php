<?php include_once('header.php'); ?>
<?php include_once('headerLinks.php'); ?>
<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_invoice($_POST['txtdate'],$_POST['txtcus'],$_POST['txtwar'],$_POST['txtamt'],$_POST['txtlab'],$_POST['txtpro'],$_POST['txtdis'],$_POST['txtpre'],$_POST['txttotal'],$_POST['txtmet'],$_POST['txtbal'],$_POST['txtbank'],$_POST['txtacc'],$_POST['txtchq'],$_POST['txtcdate'],$_POST['stock_id'],$_POST['product_code'],$_POST['product_name'],$_POST['qty'],$_POST['rate'],$_POST['weight'],$_POST['gross'],$_POST['avg'],$_POST['frt'],$_POST['tfrt'],$_POST['amt'],$_POST['tpt']);
}


?>
			<title>Bakery Software - Admin Sale Voucher</title>

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
													<h4 class="mb-0">Sales Voucher</h4> </div>
											</div>
										</div>
										<!-- end page title -->
										<!-- end row -->
										<div class="row">
											<div class="col-xl-12">
												<div class="card">
													<div class="card-body">
														<h4 class="card-title">Sales Voucher Details</h4>
														<div class="row">
															<div class="col-lg-12">
																<form autocomplete="off" method="post">
																	<div class="form-group-row row">
																		<div class="col-lg-4 col-sm-12 mb-2">
																			<label class="form-label">Date</label>
																			<input name="txtdate" type="date" id="today" class="form-control" required /> </div>
																		<!-- <div class="col-lg-4 col-sm-12 mb-2">
																			<label class="form-label">Gate Pass *</label>
																			<div>
																				<input name="txtgate" type="text" class="form-control" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Auto generated" /> </div>
																		</div> -->
																		<div class="col-lg-4 col-sm-12 mb-2">
																			<label class="form-label">Customer</label>
																			<select name="txtcus" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Supplier">
																				<option value="0">Select Customer</option>
                                                                                <?php $obj->customer();?>
																			</select>
																		</div>
																	</div>
															</div>
															<div class="row">
																<div class="col-lg-4 col-sm-12 mb-2">
																	<div>
																		<label class="form-label">Warehouse</label>
																		<select name="txtwar" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Warehouse">
																			<option value="0">Select Warehouse</option>
                                                                            <?php $obj->warehouse();?>
																		</select>
																	</div>
																</div>
															</div>
															<hr>
															 <h4 class="card-title mb-4">Product Details</h4>

                                        <div class="table-responsive" style="overflow-x:auto;">
                                        <table class="table price-table" id="myOrder" border="1">  
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
													<th>
                                                        <button type="button" name="addOrder" id="0" class="btn btn-primary btn-md btn_addOrder" required><i class="fa fa-plus "></i></button>
												
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                   <hr>

                   <h4 class="card-title">Payment Details</h4>
															<div class="form-group-row row">
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Amount</label>
																	<input name="txtamt" type="text" class="form-control" placeholder="Auto generated"/> </div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Labour Expense</label>
																	<div>
																		<input name="txtlab" type="text" class="form-control"  placeholder="Auto generated" /> </div>
																</div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Product Expense</label>
																	<div>
																		<input name="txtpro" type="text" class="form-control"  placeholder="Auto generated" /> </div>
																</div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Discount</label>
																	<div>
																		<input name="txtdis" type="text" class="form-control"  placeholder="Auto generated" /> </div>
																</div>
															</div>
															<div class="form-group-row row">
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Previous Balance</label>
																	<input name="txtpre" type="text" class="form-control" placeholder="Auto generated"/> </div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Total Balance</label>
																	<div>
																		<input name="txttotal" type="text" class="form-control" placeholder="Auto generated"/> </div>
																</div>
																<div class="col-lg-6 col-sm-12 mb-2">
																	<label class="form-label">Payment Method</label>
																	<div>
																		<div class="form-check form-check-inline">
																			<input class="form-check-input payment-method" type="radio" name="txtmet" id="inlineRadio1" value="0">
																			<label class="form-check-label" for="inlineRadio1">Cash</label>
																		</div>
																		<div class="form-check form-check-inline">
																			<input class="form-check-input payment-method" type="radio" name="txtmet" id="inlineRadio2" value="1" checked="">
																			<label class="form-check-label" for="inlineRadio2">Cheque</label>
																		</div>
																		<div class="form-check form-check-inline">
																			<input class="form-check-input payment-method" type="radio" name="txtmet" id="inlineRadio2" value="2">
																			<label class="form-check-label" for="inlineRadio2">Credit</label>
																		</div>
																	</div>
																</div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Balance</label>
																	<div>
																		<input name="txtbal" type="text" class="form-control" placeholder="Auto generated" /> </div>
																</div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Bank Name</label>
																	<div>
																		<input name="txtbank" type="text" class="form-control" placeholder="Bank Name" /> </div>
																</div>
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Account No</label>
																	<div>
																		<input name="txtacc" type="text" class="form-control" placeholder="Account No" /> </div>
																</div>
															</div>
															<div class="form-group-row row">
																<div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Cheque No</label>																	
																	<input name="txtchq" type="text" class="form-control" placeholder="Cheque No" />
																</div>
                                                                <div class="col-lg-3 col-sm-12 mb-2">
																	<label class="form-label">Cheque Date</label>
																	<input name="txtcdate" type="date" class="form-control" placeholder="Cheque No" /> 
															    </div>
															</div>
															<div class="col-lg-6 col-sm-12 mb-2">
																<button type="reset" class="btn btn-secondary waves-effect waves-light me-1"> Reset </button>
																<button name="sub" type="submit" class="btn btn-primary btn-block waves-effect waves-light me-1"> Submit </button>
															</div>       <hr>
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

        </div> <!-- end slimscroll-menu -->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include_once('footerLinks.php');
    include_once('validation.php') ?>
    <?php include_once('footer.php'); ?>

    <script>
        // $(document).on('click', '.removefeilds', function(){
        // var delete_row = $(this).data("row");
        // $('#' + delete_row).remove();
        // });
		$(document).on('click','.removefeilds', function(){
        $(this).closest('tr').remove();
        calculate(0,0);
        $("#").val(0);
      })

		var thisindex = 0;
        $('body').on('click', '.btn_addOrder', function() {
            var index = [];
            $('.index').each(function() {
                index.push($(this).val());
            });
            for (i = 0; i < index.length; i++) {
                var thisindex = index[i];
                thisindex = parseInt(thisindex) + 1;
            }
            add_feilds(thisindex)

        });

        function add_feilds(index) {
	    // $(document).ready(function(){
        // $(document).on('click','.btn_addOrder', function(){	

            var html = "";
            html += '<tr>';
			html+='<td><input type="hidden" class="form-control productcode" name="productcode[]" readonly></td>';
			html+='<td><select name="productname[]" class="select2 form-control productname" style="width:100px;" required><option value="0">--Select Product--</option><?php $obj->stock();?></select></td>';
			html+='<td><input name="qty[]" type="text" class="form-control qty" style="width:50px;" ></td>';
			html+='<td><input name="stock[]" type="text" class="form-control stock" style="width:50px;" readonly></td>';
			html+='<td><input name="rate[]" type="text" class="form-control rate" style="width:50px;" readonly></td>';
			html+='<td><input name="unit[]" type="text" class="form-control unit" style="width:50px;" readonly></td>';
			html+='<td><input name="perbox[]" type="text" class="form-control perbox" style="width:50px;" readonly></td>';
			html+='<td><input name="buying[]" type="text" class="form-control buying" style="width:50px;" readonly></td>';
			html+='<td><input name="selling[]" type="text" class="form-control selling" style="width:50px;" readonly></td>';
			html+='<td><input name="weight[]" type="text" class="form-control weight" style="width:50px;" readonly></td>';
			html+='<td><input name="gross[]" type="text" class="form-control gross" style="width:50px;" readonly></td>';
			html+='<td><input name="avg[]" type="text" class="form-control avg" style="width:50px;" readonly></td>';
			html+='<td><input name="frt[]" type="text" class="form-control frt" style="width:50px;" readonly></td>';
			html+='<td><input name="tfrt[]" type="text" class="form-control tfrt" style="width:50px;" readonly></td>';
			html+='<td><input name="amt[]" type="text" class="form-control amt" style="width:50px;" readonly></td>';
			html+='<td><input name="tpt[]" type="text" class="form-control tpt" style="width:50px;" readonly></td>';
            html += ' <td><button name="remove" type="button" class="btn btn-danger removefeilds"><i class="fa fa-remove "></i></button></td>';
            html += '<tr>';
            $("#myOrder").append(html);

	// 		$('.stockid').on('change', function(e){
	// 		var stockid = this.value;
	// 		var tr=$(this).parent().parent();
	// 		$.ajax({
    //         url:"getproduct.php",
    //         method:"get",
    //         data:{id:stockid},
    //         success:function(data){
	// 		  tr.find(".productcode").val(data["product_code"]);
    //           tr.find(".productname").val(data["product_name"]);
	// 		  tr.find(".stock").val(data["quantity"]);
	// 		  tr.find(".unit").val(data["unit"]);
    //           tr.find(".perbox").val(data["per_piece"]);
	// 		  tr.find(".selling").val(data["selling"]);
    //           tr.find(".qty").val(0);
    //           tr.find(".rate").val(0);
    //           tr.find(".buying").val(0);
    //           tr.find(".weight").val(0);
	// 		  tr.find(".gross").val(0);
	// 		  tr.find(".avg").val(0);
    //           tr.find(".frt").val(0);
    //           tr.find(".tfrt").val(0);
    //           tr.find(".amt").val(0);
    //           tr.find(".tpt").val(0);	
    //           calculate(0,0);
	// 		}
    //       })
    //     })
	//   }) 

    

        }

    </script>
</body>