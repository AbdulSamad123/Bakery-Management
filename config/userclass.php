<?php
// user class//
include_once 'configclass.php';
class userclass extends configclass{
//variable//	
private $con;
// get connection function//
public function getconnection(){
    $this->con = $this->connect();
    return $this->con;
}    
//end of get connection function//

// get user role function//
public function get_user_role($table_name='',$column_name='',$user_role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $data_user_role = '';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
    foreach ($user_role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where User_Role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $User_Role_ID_PK = $row['User_Role_ID_PK'];
    $User_Role = $row['User_Role'];
    $data_user_role = $User_Role;
    echo "<option value='$User_Role_ID_PK' id='option".$User_Role_ID_PK."' data-user-role=".$data_user_role.">$User_Role</option>";
  }
} 
// end of get user role function // 

// get admin role function//
public function get_admin_roles($table_name='',$column_name='',$user_role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $this_role ='';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
 foreach ($user_role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where User_Role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $User_Role_ID_PK = $row['User_Role_ID_PK'];
    $User_Role = $row['User_Role'];
    $data_user_role = $User_Role;
    echo "<option value='$User_Role_ID_PK' id='option".$User_Role_ID_PK."' data-user-role=".$data_user_role.">$User_Role</option>";
  }
} 
// end of get admin role function // 


// get users roles function//
public function get_users_roles($table_name='',$column_name='',$user_role=''){
  $this->con = $this->getconnection() ;
   $columns = array();
   $roles = array();
   $this_role ='';
  foreach ($column_name as $key => $column) {
    $columns[] = $column;
  }
 foreach ($user_role as $key => $role) {
    $roles[] = $role;
  }
  $sql = "select `".implode("`,`", $columns)."` from `$table_name` where User_Role in ('".implode("' , '", $roles)."')";
  $res = mysqli_query($this->con,$sql);
  foreach ($res as $key => $row) {
    $User_Role_ID_PK = $row['User_Role_ID_PK'];
    $User_Role = $row['User_Role'];
    $data_user_role = $User_Role;
    echo "<option value='$User_Role_ID_PK' id='option".$User_Role_ID_PK."' data-user-role=".$data_user_role.">$User_Role</option>";
  }
} 
// end of get users roles function // 



// check user function//
public function check_user($table_name='',$where='',$and=''){
    $this->con = $this->getconnection() ;
    $sql = "select  count(*) as total_row from `$table_name` $where $and";
     $res = mysqli_query($this->con,$sql);
     $row = mysqli_fetch_array($res);
     $res = $row['total_row'];
     return $res; 	
}
// end of check user function// 


// check user access function//
public function check_user_access($table_name1,$table_name2,$where=''){
    $this->con = $this->getconnection() ;
    $sql = "select $table_name1.*,(SELECT $table_name2.User_Role from $table_name2 WHERE $table_name2.User_Role_ID_PK = $table_name1.Role_ID_FK) as User_Role from $table_name1 $where ";
     $res = mysqli_query($this->con,$sql);
     return $res;
    
}
// end of check user access function// 


// get role id function//
public function get_role_id($table_name,$user_role){
	$this->con = $this->getconnection() ;
    $sql = "select User_Role_ID_PK from `$table_name` where User_Role in('$user_role')";
    $res = mysqli_query($this->con,$sql);
    $row = mysqli_fetch_array($res);
    $User_Role_ID_PK = $row['User_Role_ID_PK'];
    return $User_Role_ID_PK;
}
// end of get role id function//


// get selected role function//
public function getselectedrole($table_name,$where){
  $this->con = $this->getconnection() ;
    $sql = "select User_Role from `$table_name` $where";
    $res = mysqli_query($this->con,$sql);
    $row = mysqli_fetch_array($res);
    $User_Role = $row['User_Role'];
    return $User_Role;
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

 // // search function//
 // public function searchusers($table_name1='',$table_name2='',$where='',$and=''){
 //    $this->con = $this->getconnection() ; 
 //    $sql = "select $table_name1.*,(select $table_name2.Company_ID_PK from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.Company_ID_FK and $table_name2.Is_Deleted = 0) as Company_ID_PK,(select $table_name2.Company_Name from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.Company_ID_FK and $table_name2.Is_Deleted = 0) as Company_Name from $table_name1 $where $and ";
 //     $res = mysqli_query($this->con,$sql);
 //     return $sql;
 //  }  
 //  //  end of search function// 


 // search function//
 public function searchusers($table_name='',$where='',$and=''){
    $this->con = $this->getconnection() ; 
    $sql = "select * from $table_name $where $and ";
     $res = mysqli_query($this->con,$sql);
     return $res;
  }  
  //  end of search function// 

 // search function//
 public function searchuserscompany($table_name1='',$table_name2='',$table_name3='',$where='',$and='',$group_by=''){
    $this->con = $this->getconnection() ; 
    $sql = "select $table_name1.CompanyIDFK as User_Company_ID,(select $table_name2.Company_ID_PK from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.CompanyIDFK and $table_name2.Is_Deleted = 0) as Company_ID_PK,(select $table_name2.Company_Name from $table_name2 WHERE $table_name2.Company_ID_PK = $table_name1.CompanyIDFK and $table_name2.Is_Deleted = 0) as Company_Name,(SELECT $table_name3.Project_ID_PK from $table_name3 WHERE $table_name3.Project_ID_PK = $table_name1.ProjectIDFK and $table_name3.Is_Deleted =0) as Project_ID_PK,(SELECT $table_name3.Project_Name from $table_name3 WHERE $table_name3.Project_ID_PK = $table_name1.ProjectIDFK and $table_name3.Is_Deleted =0) as Project_Name,(SELECT $table_name3.
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

   // view users function//
 public function viewusers($table_name1='',$table_name2='',$where='',$and_where='',$and_like='',$not_in='',$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
     $sql = "SELECT $table_name1.*,$table_name2.User_Role_ID_PK,$table_name2.User_Role from $table_name1 INNER JOIN $table_name2 on $table_name2.User_Role_ID_PK = $table_name1.User_Role_ID_FK $where $and_where $and_like $not_in $order_by $limit";
  $res = mysqli_query($this->con,$sql);
  return $res;
  }  
  //  end of view users function// 

  // view user activity function//
 public function viewuseractivity($table_name1='',$table_name2='',$where='',$and_where='',$and_like='',$cast='',$group_by='',$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
    $sql = "SELECT $table_name1.*,$table_name2.* from $table_name1 INNER JOIN $table_name2 on $table_name2.User_ID_PK = $table_name1.UserIDFK $where $and_where $and_like $cast $group_by $order_by $limit ";
    $res = mysqli_query($this->con,$sql);
    return $res;
  }  
  //  end of view user activity function// 


   // view agents function//
 public function viewagents($table_name1='',$table_name2='',$where='',$and_where=''
  ,$and_like,$order_by='',$limit=''){
    $this->con = $this->getconnection() ; 
     $sql = "SELECT $table_name1.*,$table_name2.User_Role_ID_PK,$table_name2.User_Role from $table_name1 INNER JOIN $table_name2 on $table_name2.User_Role_ID_PK = $table_name1.User_Role_ID_FK $where $and_where $and_like $order_by $limit";
  $res = mysqli_query($this->con,$sql);
  return $res;
  }  
  //  end of view agents function// 


 // login function//
public function login($table_name1='',$table_name2='',$table_name3='',$where){
     $this->con = $this->getconnection();
  $sql = "select $table_name1.*,$table_name2.User_Role,(select $table_name3.CompanyIDFK from $table_name3 WHERE $table_name3.UserIDFK = $table_name1.User_ID_PK and $table_name3.IsDeleted =0 LIMIT 1) as UserCompanyID from $table_name1 inner join $table_name2 on $table_name2.User_Role_ID_PK = $table_name1.User_Role_ID_FK $where";
  $res = mysqli_query($this->con,$sql);
  foreach($res as $key =>$row) {
    $res = $row;
    return $res;
  }
  //  end of login function//
  
}


//end of user class//
}
?>