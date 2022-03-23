<?php
include 'session/session.php';
include_once('../dbconfig/dbconfig.php');
// dbconfig instance //
$dbconfig = new dbconfig();
date_default_timezone_set('Asia/karachi');
$Edit_Date = date('Y-m-d h:i:s');
$GLOBALS['edit_date'] = $Edit_Date;
if(isset($_SESSION['user_id_pk'])){
$user_id_pk = $_SESSION['user_id_pk'];
$user_name = $_SESSION['user_name'];
 // edit user array //
 $edit_user = array(
 'is_login'=>0,
 'edit_date'=>$GLOBALS['edit_date'],
 'logout_activity'=>'Logged Out'
);
//end of edit user array //

$where = $dbconfig->where('User_ID_PK',$user_id_pk);
$result = $dbconfig->edit_user('users',$edit_user,$where);

 // save user activity array //
 $save_user_activity = array(
 'useridfk'=>$user_id_pk,
 'username'=>$user_name,
 'remarks'=>'Logged Out',
 'activitydate'=>$GLOBALS['edit_date'],
 'isdeleted'=>0
);
//end of save user activity array //

 $result = $dbconfig->save_user_activity('user_activity',$save_user_activity);


unset($_SESSION['user_id_pk']);
sleep(1);
echo "<script>location.assign('index.php')</script>";
$_SESSION['signout_message'] = 'You Have Logged Out';

}



?>