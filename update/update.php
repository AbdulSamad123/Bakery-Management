<?php
 include_once('../session/session.php');
include_once('../config/configclass.php');
// dbconfig instance //
$config = new configclass();
$con = $config->connect();
        if (isset($_POST['btnUpdateEntry'])) {
            $id = $_POST['id'];
            $date = $_POST['date'];
            $loomNum = $_POST['txtLoomNum'];
            $proCode = $_POST['cmbProCode'];
            $shift = $_POST['cmbShift'];
            $rollWeight = $_POST['txtRollWeight'];
            $totPcs = $_POST['txtTotalPcs'];
            $totPcsA = $_POST['txtTotalPcsA'];
            $totPcsB = $_POST['txtTotalPcsB'];
            $size = $_POST['txtSize'];
            $weight = $_POST['txtWeight'];
            $bPer = $_POST['txtBPer'];
            $avg = $_POST['txtAvg'];



            $sql = "UPDATE tbl_entry SET 
            E_DATE = '$date', 
            E_LOOMNUM = '$loomNum', 
            E_PROCODE = '$proCode', 
            E_SHIFT = '$shift',
            E_ROLLWEIGHT = '$rollWeight',
            E_TOTPCS = '$totPcs',
            E_TOTPCSA = '$totPcsA',
            E_TOTPCSB = '$totPcsB',
            E_SIZE = '$size',
            E_WEIGHT = '$weight',
            E_BPER = '$bPer',
            E_AVG = '$avg'
            WHERE E_ID = $id";
            $update = mysqli_query($con, $sql);
            echo '<script type="text/javascript">
            location.replace("entry.php");
          </script>';
        }
        ?>
        <?php $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM tbl_entry WHERE E_ID = $id");
        while ($data = mysqli_fetch_array($result)) {
            $date = $data['E_DATE'];
            $loomNum = $data['E_LOOMNUM'];
            $proCode = $data['E_PROCODE'];
            $shift = $data['E_SHIFT'];
            $rollWeight = $data['E_ROLLWEIGHT'];
            $totPcs = $data['E_TOTPCS'];
            $totPcsA = $data['E_TOTPCSA'];
            $totPcsB = $data['E_TOTPCSB'];
            $size = $data['E_SIZE'];
            $weight = $data['E_WEIGHT'];
            $bPer = $data['E_BPER'];
            $avg = $data['E_AVG'];
        }
        ?>