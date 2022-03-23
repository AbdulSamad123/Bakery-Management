<?php
include_once('../session/session.php');
include_once('../config/configclass.php');
// dbconfig instance //
$config = new configclass();
$con = $config->connect();
                                        $fetchEntry = mysqli_query($con, "SELECT 
                                        E_ID, 
                                        E_DATE, 
                                        E_LOOMNUM,
                                        E_PROCODE,
                                        E_SHIFT,
                                        E_ROLLWEIGHT,
                                        E_TOTPCS,
                                        E_TOTPCSA,
                                        E_TOTPCSB,
                                        E_SIZE,
                                        E_WEIGHT,
                                        E_BPER,
                                        E_AVG,
                                        p_id
                                        FROM tbl_entry ORDER BY E_ID DESC");
                                        ?>
                                        <table class="table table-bordered table-striped table-bordered" id="example" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Date</th>
                                                    <th>Loom No.</th>
                                                    <th>Product Code</th>
                                                    <th>Shift</th>
                                                    <th>Roll Weight</th>
                                                    <th>Total Pieces</th>
                                                    <th>Total Pieces A</th>
                                                    <th>Total Pieces B</th>
                                                    <th>Size</th>
                                                    <th>Weight</th>
                                                    <th>B %</th>
                                                    <th>Average</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Date</th>
                                                    <th>Loom No.</th>
                                                    <th>Product Code</th>
                                                    <th>Shift</th>
                                                    <th>Roll Weight</th>
                                                    <th>Total Pieces</th>
                                                    <th>Total Pieces A</th>
                                                    <th>Total Pieces B</th>
                                                    <th>Size</th>
                                                    <th>Weight</th>
                                                    <th>B %</th>
                                                    <th>Average</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $sno = 0;
                                                while ($row = mysqli_fetch_array($fetchEntry)) {
                                                    $id = $row['E_ID'];
                                                    $orgDate = $row['E_DATE'];
                                                    $newDate = date("d-m-Y", strtotime($orgDate)); ?>
                                                    <tr>
                                                        <td><?php echo ++$sno; ?></td>
                                                        <td><?php echo $newDate; ?></td>
                                                        <td><?php echo $row['E_LOOMNUM']; ?></td>
                                                        <td><?php echo $row['E_PROCODE']; ?></td>
                                                        <td><?php echo $row['E_SHIFT']; ?></td>
                                                        <td><?php echo $row['E_ROLLWEIGHT']; ?></td>
                                                        <td><?php echo $row['E_TOTPCS']; ?></td>
                                                        <td><?php echo $row['E_TOTPCSA']; ?></td>
                                                        <td><?php echo $row['E_TOTPCSB']; ?></td>
                                                        <td><?php echo $row['E_SIZE']; ?></td>
                                                        <td><?php echo $row['E_WEIGHT']; ?></td>
                                                        <td><?php echo $row['E_BPER']; ?></td>
                                                        <td><?php echo $row['E_AVG']; ?></td>
                                                        <td>
                                                            <a href="./updateEntry.php?id=<?php echo $row['E_ID'] ?>" class="btn btn-warning">Update</a>
                                                            <a href="./deleteEntry.php?id=<?php echo $row['E_ID'] ?>" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>


 <?php include('../config.php');
                                        $fetchProducts = mysqli_query($con, 'SELECT * FROM tbl_products ORDER BY p_id DESC'); ?>
                                        <table class="table table-bordered table-striped table-bordered" id="example" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <td>S. No.</td>
                                                    <th>Product Code</th>
                                                    <th>Product Dimentions</th>
                                                    <th>Finish Weight</th>
                                                    <th>Grey Weight</th>
                                                    <th>Pile Yarn</th>
                                                    <th>Weft Yarn</th>
                                                    <th>Ground Yarn</th>
                                                    <th>Fancy Yarn</th>
                                                    <th>Pile to Pile (Len.)</th>
                                                    <th>Cam Pile</th>
                                                    <th>Reed</th>
                                                    <th>Pick On Loom</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $sno = 0;
                                            while ($row = mysqli_fetch_array($fetchProducts)) {
                                                $id = $row['p_id']; ?>
                                                <tr>
                                                    <td><?php echo ++$sno; ?></td>
                                                    <td><?php echo $row['p_code']; ?></td>
                                                    <td><?php echo $row['p_dimentions']; ?></td>
                                                    <td><?php echo $row['p_finishWeight']; ?></td>
                                                    <td><?php echo $row['p_greyWwight']; ?></td>
                                                    <td><?php echo $row['p_pileYarn']; ?></td>
                                                    <td><?php echo $row['p_WeftYarn']; ?></td>
                                                    <td><?php echo $row['p_groundYarn']; ?></td>
                                                    <td><?php echo $row['p_fancyYarn']; ?></td>
                                                    <td><?php echo $row['p_pileToPile']; ?></td>
                                                    <td><?php echo $row['p_camPile']; ?></td>
                                                    <td><?php echo $row['p_reed']; ?></td>
                                                    <td><?php echo $row['p_pickOnLoom']; ?></td>
                                                    <td>
                                                        <a href="./Updateproducts.php?id=<?php echo $row['p_id'] ?>" class="btn btn-warning">Update</a>
                                                        <a href="./deleteProducts.php?id=<?php echo $row['p_id'] ?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>



<?php
                                        include_once('../config.php');
                                        $fetchEntry = mysqli_query($con, "SELECT 
                                        E_ID, 
                                        E_DATE, 
                                        E_LOOMNUM,
                                        E_PROCODE,
                                        E_SHIFT,
                                        E_ROLLWEIGHT,
                                        E_TOTPCS,
                                        E_TOTPCSA,
                                        E_TOTPCSB,
                                        E_SIZE,
                                        E_WEIGHT,
                                        E_BPER,
                                        E_AVG 
                                        FROM tbl_entry ORDER BY E_ID DESC");
                                        ?>
                                        <table class="table table-bordered table-striped table-bordered" id="example" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Date</th>
                                                    <th>Loom No.</th>
                                                    <th>Product Code</th>
                                                    <th>Shift</th>
                                                    <th>Roll Weight</th>
                                                    <th>Total Pieces</th>
                                                    <th>Total Pieces A</th>
                                                    <th>Total Pieces B</th>
                                                    <th>Size</th>
                                                    <th>Weight</th>
                                                    <th>B %</th>
                                                    <th>Average</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Date</th>
                                                    <th>Loom No.</th>
                                                    <th>Product Code</th>
                                                    <th>Shift</th>
                                                    <th>Roll Weight</th>
                                                    <th>Total Pieces</th>
                                                    <th>Total Pieces A</th>
                                                    <th>Total Pieces B</th>
                                                    <th>Size</th>
                                                    <th>Weight</th>
                                                    <th>B %</th>
                                                    <th>Average</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $sno = 0;
                                                while ($row = mysqli_fetch_array($fetchEntry)) {
                                                    $id = $row['E_ID'];
                                                    $orgDate = $row['E_DATE'];
                                                    $newDate = date("d-m-Y", strtotime($orgDate)); ?>
                                                    <tr>
                                                        <td><?php echo ++$sno; ?></td>
                                                        <td><?php echo $newDate; ?></td>
                                                        <td><?php echo $row['E_LOOMNUM']; ?></td>
                                                        <td><?php echo $row['E_PROCODE']; ?></td>
                                                        <td><?php echo $row['E_SHIFT']; ?></td>
                                                        <td><?php echo $row['E_ROLLWEIGHT']; ?></td>
                                                        <td><?php echo $row['E_TOTPCS']; ?></td>
                                                        <td><?php echo $row['E_TOTPCSA']; ?></td>
                                                        <td><?php echo $row['E_TOTPCSB']; ?></td>
                                                        <td><?php echo $row['E_SIZE']; ?></td>
                                                        <td><?php echo $row['E_WEIGHT']; ?></td>
                                                        <td><?php echo $row['E_BPER']; ?></td>
                                                        <td><?php echo $row['E_AVG']; ?></td>
                                                        <td>
                                                            <a href="./updateEntry.php?id=<?php echo $row['E_ID'] ?>" class="btn btn-warning">Update</a>
                                                            <a href="./deleteEntry.php?id=<?php echo $row['E_ID'] ?>" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>