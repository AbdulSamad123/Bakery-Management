<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="adminDashboard.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="adminDashboard.php">
                        <i class="uil-dashboard"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Staff </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user"></i>
                        <span>Staff Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="createStaff.php">Add Staff</a>
                        </li>
                        <li>
                            <a href="viewStaff.php">View Staff</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">Role</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-tasks"></i>
                        <span>Role Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="createRole.php">Add Role</a></li>
                        <li>
                            <a href="viewRole.php">View Role</a>
                        </li>
                    </ul>
                </li>


                <li class="menu-title">Product</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-list"></i>
                        <span>Product Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addProduct.php">Create Product</a></li>
                        <li><a href="viewProduct.php">View Product</a></li>
                        <li><a href="viewInventoryStatus.php">View Inventory Status</a></li>
                    </ul>
                </li>

                <li class="menu-title">Warehouse</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-warehouse"></i>
                        <span>Warehouse</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addWarehouse.php">Add Warehouse</a></li>
                        <li><a href="viewWarehouse.php">View Warehouse</a></li>
                        <li><a href="totalStock.php">Total Stock</a></li>
                    </ul>
                </li>
                <li class="menu-title">Stock</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-book"></i>
                        <span>Stock Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addStocks.php">Add Stock</a></li>
                        <li><a href="viewStockStatus.php">View Stock</a></li>
                    </ul>
                </li>

                <li class="menu-title">Supplier</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user"></i>
                        <span>Suppliers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="registerSupplier.php">Create Supplier</a></li>
                        <li><a href="viewSupplier.php">View Supplier</a></li>
                    </ul>
                </li>

                <li class="menu-title">Customer</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user"></i>
                        <span>Add Customer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="registerCustomer.php">Create Customer</a></li>
                        <li><a href="viewCustomer.php">View Customer</a></li>
                    </ul>
                </li>
                <li class="menu-title">Direct Sale</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-dollar-sign"></i>
                        <span>Direct Sale</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addDirectSale.php">Add Direct Sale</a></li>
                        <li><a href="viewDirectSale.php">View Direct Sale</a></li>
                    </ul>
                </li>


                <li class="menu-title">Voucher</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-wallet"></i>
                        <span>Vouchers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addSaleVoucher.php">Add Sale</a></li>
                        <li><a href="viewSale.php">View Sale</a></li>
                        <li><a href="addPurchaseVoucher.php">Add Purchase</a></li>
                        <li><a href="viewPurchase.php">View Purchase</a></li>
                    </ul>
                </li>

                <li class="menu-title">Sale/Purchase Return</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-wallet"></i>
                        <span>Sale/Purchase Return</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="saleReturn.php">Sale Return</a></li>
                        <li><a href="purchaseReturn.php">Purchase Return</a></li>
                    </ul>
                </li>


                <li class="menu-title">Accounts</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-wallet"></i>
                        <span>Accounts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="addPayment.php">Add Payment</a></li>
                        <li><a href="viewPayment.php">View Payment</a></li>
                        <li><a href="addCheque.php">Add Cheque</a></li>
                        <li><a href="viewCheque.php">View Cheque</a></li>
                        <li><a href="addExpense.php">Add Expense</a></li>
                        <li><a href="viewExpense.php">View Expense</a></li>
                    </ul>
                </li>


                <li class="menu-title">Report</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-file"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="saleReport.php">Sale Report</a></li>
                        <li><a href="purchaseReport.php">Purchase Report</a></li>
                        <li><a href="expenseReport.php">Expense Report</a></li>
                        <li><a href="paymentReport.php">Payment Report</a></li>
                        <li><a href="productSheet.php">Product Sheet Report</a></li>
                        <li><a href="trialBalance.php">Trial Balance Report</a></li>
                        <li><a href="costingReport.php">Costing Report</a></li>
                        <li><a href="productstockReport.php">Product Stock Report</a></li>
                        <li><a href="dailystockReport.php">Daily Stock Report</a></li>
                        <li><a href="Incomereport.php">Income Report</a></li>
                        <li><a href="balanceSheet.php">Balance Sheet</a></li>
                        <li><a href="ledgerReport.php">Daily Ledger Report</a></li>




                    </ul>
                </li>


                <li class="menu-title">General Settings</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="settings.php">Site Settings</a></li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>