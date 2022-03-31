<?php

class functions
 {
    function con()
    {
        session_start();
        $conn = $_SESSION['conn'] = mysqli_connect( 'localhost', 'root', '', 'bakery' );
    }

    function login( $email, $pass )
    {
        $conn = $_SESSION['conn'];
        $insert = mysqli_query( $conn, "select * from user where email='".$email."' AND password='".$pass."'" ) or die(mysql_error());
        $num = mysqli_num_rows( $insert );
        if ($num>0)
       {
            $_SESSION['email'] = $email;
            header( 'location:index.php' );

        }
    }

    function add_staff($hire_date,$role,$name, $email, $cnic, $mobile, $address)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into staff values('$id','$hire_date','$role','$name', '$email', '$cnic', '$mobile', '$address');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Staff Added'); </script>";

        }
    }

    function add_supplier($entry_date, $sup_name, $sup_mob, $sup_bal)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into supplier values('$id','$entry_date', '$sup_name', '$sup_mob', '$sup_bal');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Supplier Added'); </script>";
        }
    }
   
    function add_customer($cus_entry, $cus_name, $cus_mob, $cus_bal)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into customer values('$id','$cus_entry', '$cus_name', '$cus_mob', '$cus_bal');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Customer Added'); </script>";
        }
    }

    function add_product($product_date,$product_code,$product_name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into product values('$id','$product_date','$product_code','$product_name');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Product Added'); </script>";
        }
    }

    function add_warehouse($warehouse_name, $warehouse_city)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into warehouse values('$id','$warehouse_name', '$warehouse_city');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Warehouse Added'); </script>";
        }
    }

    function add_payment($pay_date,$person,$amount_rec,$remaining)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into payement values('$id','$pay_date','$person','$amount_rec','$remaining');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Payment Added'); </script>";
        }
    }

    function add_cheque($entry_date,$person,$cheque_no,$chq_date,$bank_name,$status)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into cheque values('$id','$entry_date','$person','$cheque_no','$chq_date','$bank_name','$status');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Cheque Added'); </script>";
        }
    }

    function add_expense($expense_date,$type,$costing,$exp_name,$exp_amt)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into expense values('$id','$expense_date','$type','$costing','$exp_name','$exp_amt');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Expense Added'); </script>";
        }
    }

    function add_stock($stock_entry,$warehouse_id,$product_name,$product_code,$quantity,$unit,$per_piece,$selling,$vehicle,$gate_pass,$batch_number,$supplier_id)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into stock values('$id','$stock_entry','$warehouse_id','$product_name','$product_code','$quantity','$unit','$per_piece','$selling','$vehicle','$gate_pass','$batch_number','$supplier_id');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Stock Added'); </script>";
        }
    }
    
    function add_invoice($order_date,$customer_id,$warehouse_id,$total_amt,$lab_exp,$pro_exp,$discount,$pre_bal,$balance,$pay_method,$new_bal,$bank_name,$account_num,$cheque_num,$cheque_date,$stock_id,$product_code,$product_name,$qty,$rate,$weight,$gross,$avg,$frt,$tfrt,$amt,$tpt)
    {
        $id="";
        $insert = mysqli_query( $conn, "insert into invoice values('$id','$order_date','$customer_id','$warehouse_id','$total_amt','$lab_exp','$pro_exp','$discount','$pre_bal','$balance','$pay_method','$new_bal','$bank_name','$account_num','$cheque_num','$cheque_date');" ) or die(mysql_error());
        if ( $insert )
        {

            $last_id = mysqli_insert_id($conn);
            if($last_id!=null){
                for($i=0; $i<count($stock_id); $i++){
      
                    $rem_qty = $arr_product_stock[$i] - $arr_product_qty[$i];
        
                    if($rem_qty<0)
                    {
                        echo '<script type="text/javascript">
                            jQuery(function validation(){
                            swal("Warning", "Enter Sales Amount", "warning", {
                            button: "Continue",
                                });
                            });
                            </script>';
                    }
                    else
                    {
                        $update = $pdo->prepare("UPDATE tbl_product SET stock = '$rem_qty' WHERE product_id='".$arr_product_id[$i]."'");
                        $update->execute();
                    }    
                }        
            }       
        }
    }

    function add_purchase($order_date,$supplier_id,$warehouse_id,$total_amt,$lab_exp,$pro_exp,$discount,$pre_bal,$balance,$pay_method,$new_bal,$bank_name,$account_num,$cheque_num,$cheque_date)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into purchase values('$id','$order_date','$supplier_id','$warehouse_id','$total_amt','$lab_exp','$pro_exp','$discount','$pre_bal','$balance','$pay_method','$new_bal','$bank_name','$account_num','$cheque_num','$cheque_date');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('purchase Added'); </script>";
        }
    }
 
    function view_booking()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from booking' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';            
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[28] . '</td>';
            echo '<td>' . $row[29] . '</td>';
            echo '<td>' . $row[30] . '</td>';
            echo '<td>' . $row[31] . '</td>';
            echo '<td>' . $row[32] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_booking.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_booking.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a> | <a href="output/invoice.php?id='.$row[0].'"> <i class="fas fa-file-invoice"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 


    function supplier()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from supplier");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[2]. "</option>";					
		}
    }

    function customer()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from customer");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[2]. "</option>";					
		}
    }

    function warehouse()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from warehouse");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function stock()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from stock");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[3]. "</option>";					
		}
    }

    function del_pod()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from pod where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewpod.php");
        }
                
    }



    function update_client($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update client set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewclient.php');</script>";
        }
                
    }



    

 }
?>