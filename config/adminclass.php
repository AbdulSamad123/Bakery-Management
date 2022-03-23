<?php
// admin class//
include_once 'configclass.php';
class adminclass extends configclass{
//variable//	
private $con;
// get connection function//
public function getconnection(){
    $this->con = $this->connect();
    return $this->con;
}    
//end of get connection function//

// get admin role function//
public function get_role($table_name='',$column_name='',$role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $data_role = '';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
    foreach ($role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $roleid = $row['roleid'];
    $role = $row['role'];
    $data_role = $role;
    echo "<option value='$roleid' id='option".$roleid."' data-admin-role=".$data_role.">$role</option>";
  }
} 
// end of get admin role function // 

// get admin role function//
public function get_roles($table_name='',$column_name='',$role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $this_role ='';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
 foreach ($role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $roleid = $row['roleid'];
    $role = $row['role'];
    $data_role = $role;
    echo "<option value='$roleid' id='option".$roleid."' data-admin-role=".$data_role.">$role</option>";
  }
} 
// end of get admin role function // 


// get admins roles function//
public function get_admins_roles($table_name='',$column_name='',$role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $this_role ='';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
 foreach ($role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $roleid = $row['roleid'];
    $role = $row['role'];
    $data_role = $role;
    echo "<option value='$roleid' id='option".$roleid."' data-admin-role=".$data_role.">$role</option>";
  }
} 
// end of get admins roles function // 



// check admin function//
public function check_admin($table_name='',$where='',$and=''){
    $this->con = $this->getconnection() ;
    $sql = "select  count(*) as total_row from `$table_name` $where $and";
     $res = mysqli_query($this->con,$sql);
     $row = mysqli_fetch_array($res);
     $res = $row['total_row'];
     return $res; 	
}
// end of check admin function// 


// check admin access function//
public function check_admin_access($table_name1,$table_name2,$where=''){
    $this->con = $this->getconnection() ;
    $sql = "select $table_name1.*,(SELECT $table_name2.role from $table_name2 WHERE $table_name2.roleid = $table_name1.Role_ID_FK) as role from $table_name1 $where ";
     $res = mysqli_query($this->con,$sql);
     return $res;
    
}
// end of check admin access function// 


// get role id function//
public function get_role_id($table_name,$role){
	$this->con = $this->getconnection() ;
    $sql = "select roleid from `$table_name` where role in('$role')";
    $res = mysqli_query($this->con,$sql);
    $row = mysqli_fetch_array($res);
    $roleid = $row['roleid'];
    return $roleid;
}
// end of get role id function//


// get selected role function//
public function getselectedrole($table_name,$where){
  $this->con = $this->getconnection() ;
    $sql = "select role from `$table_name` $where";
    $res = mysqli_query($this->con,$sql);
    $row = mysqli_fetch_array($res);
    $role = $row['role'];
    return $role;
}
// end of get selected role function//



// check email function//
public function check_email($table_name='',$column_name='',$where='',$and=''){
    $this->con = $this->getconnection();
    $result = true;
     foreach ($column_name as $key => $column) {
    $columns[] = $column;
   }
    $sql = "select `".implode("`,`", $columns)."` from `$table_name` $where $and";
     $res = mysqli_query($this->con,$sql);
     if($row = mysqli_fetch_array($res)){
      $result = false;
     }else{
      $result = true;
     } 
     return $result;
}
// end of check email function//   

// check code function//
public function check_code($table_name='',$where='',$and=''){
    $this->con = $this->getconnection();
    $forgot_password = '';
    $sql = "select Forgot_Password  from `$table_name` $where $and";
    $res = mysqli_query($this->con,$sql);
    $row = mysqli_fetch_array($res);
    $forgot_password = $row['Forgot_Password'];
     return $forgot_password;
}
// end of check code function//   


// check password function//
public function check_password($table_name='',$column_name='',$where='',$and=''){
    $this->con = $this->getconnection();
    $result = false;
     foreach ($column_name as $key => $column) {
    $columns[] = $column;
   }
    $sql = "select `".implode("`,`", $columns)."` from `$table_name` $where $and";
     $res = mysqli_query($this->con,$sql);
     if($row = mysqli_fetch_array($res)){
      $result = true;
     }else{
      $result = false;
     } 
     return $result;
}
// end of check password function//    



// check cnic function//
public function check_cnic($table_name='',$column_name='',$where='',$and=''){
    $this->con = $this->getconnection();
    $result = true;
     foreach ($column_name as $key => $column) {
    $columns[] = $column;
   }
    $sql = "select `".implode("`,`", $columns)."` from `$table_name` $where $and";
     $res = mysqli_query($this->con,$sql);
     if($row = mysqli_fetch_array($res)){
      $result = false;
     }else{
      $result = true;
     } 
     return $result;
}
// end of check cnic function//    



// insert function//
public function insert($table_name,$input){
    $this->con = $this->getconnection() ;
    $keys = array();
    $values = array();
    foreach ($input as $key => $value) {
  	$keys[] = $key;
  	$values[] = $value;
    }
   $sql = "INSERT INTO `$table_name`(`".implode("`,`", $keys)."`) VALUES('".implode("','", $values)."')";
   $res = mysqli_query($this->con,$sql);
   $res = mysqli_query($this->con,"Select last_insert_id()");
   $row = mysqli_fetch_array($res);
   $res = $row;
   return $res;
    
}

// end of insert function//  

// check verify email function//
public function check_verify_email($table_name,$email){
    $this->con = $this->getconnection() ;	
   $sql = "select Is_Verified from `$table_name` where Email ='$email'";
   $res = mysqli_query($this->con,$sql);
   $row = mysqli_fetch_array($res);
   $Is_Verified = $row['Is_Verified'];
   return $Is_Verified;
}
//end of check verify email function//

 // update function//
 public function update($table_name,$input,$where){
      $this->con = $this->getconnection() ;
      $keys = array();
    foreach($input as $key => $value){
      $keys[] = "$key = '$value'";
    }    
    $sql = "UPDATE $table_name SET ".implode(', ', $keys) ." $where ";
    $res = mysqli_query($this->con,$sql);
    return $res ;
    }  
  //  end of update function//


 // search function//
 public function search($table_name,$where='',$and=''){
    $this->con = $this->getconnection() ; 
    $sql = "select * from $table_name $where ";
    $res = mysqli_query($this->con,$sql);
    return $res;
  }  
  //  end of search function// 


 // search function//
 public function searchadmins($table_name='',$where='',$and=''){
    $this->con = $this->getconnection() ; 
    $sql = "select * from $table_name $where $and ";
     $res = mysqli_query($this->con,$sql);
     return $res;
  }  
  //  end of search function// 

 // search function//
 public function searchadminscompany($table_name1='',$table_name2='',$table_name3='',$where='',$and='',$group_by=''){
    $this->con = $this->getconnection() ; 
    $sql = "select $table_name1.CompanyIDFK as admin_Company_ID,(select $table_name2.Company_ID_PK from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.CompanyIDFK and $table_name2.Is_Deleted = 0) as Company_ID_PK,(select $table_name2.Company_Name from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.CompanyIDFK and $table_name2.Is_Deleted = 0) as Company_Name,(SELECT $table_name3.Project_ID_PK from $table_name3 WHERE $table_name3.Project_ID_PK = $table_name1.ProjectIDFK and $table_name3.Is_Deleted =0) as Project_ID_PK,(SELECT $table_name3.Project_Name from $table_name3 WHERE $table_name3.Project_ID_PK = $table_name1.ProjectIDFK and $table_name3.Is_Deleted =0) as Project_Name,(SELECT $table_name3.
      Project_Type_U_ID from $table_name3 WHERE $table_name3.Project_Type_U_ID = $table_name1.ProjectType and $table_name3.Is_Deleted = 0) as Project_Type_U_ID,(SELECT $table_name3.
      Project_UID from $table_name3 WHERE $table_name3.Project_Type_U_ID = $table_name1.ProjectType and $table_name3.Is_Deleted = 0) as Project_UID,(SELECT $table_name3.Project_Type from $table_name3 WHERE $table_name3.Project_Type_U_ID = $table_name1.ProjectType and $table_name3.Is_Deleted = 0) as Project_Type from $table_name1 $where $and $group_by ";
     $res = mysqli_query($this->con,$sql);
     return $res;
  }  
  //  end of search function// 


  // view function//
 public function view($table_name='',$where='',$and='',$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
    $sql = "select * from $table_name $where $and $order_by $limit ";
    $res = mysqli_query($this->con,$sql);
    return $res;
  }  
  //  end of view function// 

   // view admins function//
 public function viewadmins($table_name1='',$table_name2='',$where='',$and_where='',$and_like='',$not_in='',$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
     $sql = "SELECT $table_name1.*,$table_name2.roleid,$table_name2.role from $table_name1 INNER JOIN $table_name2 on $table_name2.roleid = $table_name1.role_ID_FK $where $and_where $and_like $not_in $order_by $limit";
  $res = mysqli_query($this->con,$sql);
  return $res;
  }  
  //  end of view admins function// 

  // view admin activity function//
 public function viewadminactivity($table_name1='',$table_name2='',$where='',$and_where='',$and_like='',$cast='',$group_by='',$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
    $sql = "SELECT $table_name1.*,$table_name2.* from $table_name1 INNER JOIN $table_name2 on $table_name2.admin_ID_PK = $table_name1.adminIDFK $where $and_where $and_like $cast $group_by $order_by $limit ";
    $res = mysqli_query($this->con,$sql);
    return $res;
  }  
  //  end of view admin activity function// 


 // login function//
public function login($table_name1='',$table_name2='',$table_name3='',$where){
     $this->con = $this->getconnection();
  $sql = "select $table_name1.*,$table_name2.role,(select $table_name3.companyid from $table_name3 WHERE $table_name3.adminid = $table_name1.admin_ID_PK and $table_name3.IsDeleted =0 LIMIT 1) as admincompanyid from $table_name1 inner join $table_name2 on $table_name2.roleid = $table_name1.roleid $where";
  $res = mysqli_query($this->con,$sql);
  foreach($res as $key =>$row) {
    $res = $row;
    return $res;
  }
  //  end of login function//
  
}
//end of admin class//
}
?>