<?php
// dbclass//
class configclass{
// local connection //
private $host = "localhost";
private $user = "root";    
private $pass = "";    
private $db = "bakery_db";    
// end of local connection //
// connect function//	
public function connect(){
   $con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
   return $con;
   mysqli_close($con);
}
//end of connect function//	
}
// end of dbclass//
?>