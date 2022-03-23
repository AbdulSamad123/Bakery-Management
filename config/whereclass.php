 <?php
// where class//
class whereclass {
//variable//	
private $thiswhere;
private $column_key;
private $column_value;
private $like;
private $limit;
private $start;
private $table;
private $value;
private $start_date;
private $end_date;
private $days;


// get hour function //
function gethour($thiscolumn_key){
 $colkeys = array();
 foreach($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and '.implode("`,`",$this->column_key).' > now() - interval 24 hour and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now()) ';
  return $sql; 
}
// end of get hour function //

// get last days function //

function getlastdays($thiscolumn_key,$days){
 $colkeys = array();
 foreach($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $this->days = $days;
 $sql ='and DATE('.implode("`,`",$this->column_key).') > DATE(NOW()) - INTERVAL '.$this->days.' DAY and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now()) ';
  return $sql; 
}
// end of get last days function //


// get this week function //
function getthisweek($thiscolumn_key){
 $colkeys = array();
 foreach ($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and WEEKOFYEAR('.implode("`,`",$this->column_key).') = WEEKOFYEAR(NOW()) and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now())';
  return $sql; 
}
// end of get this week function //


// get last week function //
function getlastweek($thiscolumn_key){
 $colkeys = array();
 foreach ($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and WEEKOFYEAR('.implode("`,`",$this->column_key).') = WEEKOFYEAR(NOW()) - 1 and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now())';
  return $sql; 
}
// end of get last week function //


// get yesterday function //
function getyesterday($thiscolumn_key){
 $colkeys = array();
 foreach($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and DATE('.implode("`,`",$this->column_key).') = DATE(NOW()) - 1 and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now()) ';
  return $sql; 
}
// end of get yesterday function //


// get today function //

function gettoday($thiscolumn_key){
 $colkeys = array();
 foreach($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and DATE('.implode("`,`",$this->column_key).') = DATE(NOW()) and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now()) ';
  return $sql; 
}
// end of get today function //

// get week function //
function getweek($thiscolumn_key){
 $colkeys = array();
 foreach ($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and WEEK('.implode("`,`",$this->column_key).') = WEEK(NOW()) and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now())';
  return $sql; 
}
// end of get week function //

// get month function //
function getmonth($thiscolumn_key){
 $colkeys = array();
 foreach ($thiscolumn_key as $key => $colkey) {
  $colkeys[] = $colkey;
  } 
 $this->column_key = $colkeys;
 $sql ='and MONTH('.implode("`,`",$this->column_key).') = MONTH(NOW()) and YEAR('.implode("`,`",$this->column_key).') =  YEAR(Now())';
  return $sql; 
}
// end of get month function //

// where clause function//
  function where($thiscolumn_key,$thiscolumn_value){
    $this->column_key = $thiscolumn_key;
    $this->column_value = $thiscolumn_value;
     $sql = "where $this->column_key = '".$this->column_value."'";
     return $sql; 
  }
// end of where clause function//

// where like clause function//
  function wherelike($thiscolumn_key,$thiscolumn_value){
    $this->column_key = $thiscolumn_key;
    $this->column_value = $thiscolumn_value;
     $sql = "where $this->column_key like '%".$this->column_value."%'";
     return $sql; 
  }
// end of where like clause function//

// where between clause function//
  function wherebetween($thiscolumn_key,$thiscolumn_value){
    $this->column_key = $thiscolumn_key;
    $this->column_value = $thiscolumn_value;
     $sql = "where $this->column_key ".$this->column_value."";
     return $sql; 
  }
// end of where between clause function//


// and where function //  
function and_where($column){
  $cols = array();
  foreach ($column as $key => $value) {
   $cols[] = "$key = $value";
  }
     $sql = "and ".implode(' and ', $cols) ."";
     return $sql; 
}
// end of and where function //  


// and like function //  

  public function and_like($and){
    $cols= array();
    foreach ($and as $key => $val) {
      $cols[] = "$key $val";
    }
    $sql = "and ". implode('and', $cols) . "";
    return $sql;
  }
  
// end of and like function //  

// like function //
public function like($like){
  $this->like = $like;
  $sql ="like '%".$this->like."%'";
  return $sql;
}
// end of like function //



// not in function //
function not_in($column_name,$value){
  $cols = array();
  $values = array();
 foreach ($column_name as $key => $column) {
    $cols[] = $column;
  }
 foreach ($value as $key => $val) {
    $values[] = $val;
  }
     $sql = "and `".implode("`,`", $cols)."` not in ('".implode("' , '", $values)."')";
     return $sql; 
}
// end of not in function //



// limit function //
public function limit($start='',$limit=''){
  $this->limit = $limit;
  $this->start = $start;
  $sql ="limit ".$this->start.",".$this->limit."";
  return $sql;
}

// end of limit function //


// limit function //
public function limit_all($limit=''){
  $this->limit = $limit;
  $sql ="limit ".$this->limit."";
  return $sql;
}

// end of limit function //



// group by function //
public function group_by($thiscolumn_key=''){
   $this->column_key = $thiscolumn_key; 
  $sql ="group by ".$this->column_key."";
  return $sql;
}

// end of group by function //


// between function //
public function between($start_date='',$end_date=''){
  $this->start_date = $start_date;
  $this->end_date = $end_date;
  $sql ="between '".$start_date."' and '".$end_date."' ";
  return $sql;
}

// end of between function //

// cast function //
public function cast($column_key='',$column_value=''){
  $this->column_key = $column_key;
  $this->column_value = $column_value;
  $sql ="and cast(".$column_key." as date) = '".$column_value."' ";
  return $sql;
}
// end of cast function //

// where cast function //
public function wherecast($column_key='',$column_value=''){
  $this->column_key = $column_key;
  $this->column_value = $column_value;
  $sql ="where cast(".$column_key." as date) = '".$column_value."' ";
  return $sql;
}
// end of where cast function //

// less than function //
function lessthan($column_key='',$column_value=''){
   $this->column_key = $column_key;
  $this->column_value = $column_value; 
  $sql ="and ".$column_key."  < '".$column_value."' ";
     return $sql; 
}
// end of less than function //

// greater than function //
function greaterthan($column_key='',$column_value=''){
    $this->column_key = $column_key;
  $this->column_value = $column_value; 
  $sql ="and ".$column_key."  > '".$column_value."' ";
     return $sql; 
}
// end of greater than function //

// is null function //
public function isnull($column_key='',$column_value=''){
    $this->column_key = $column_key;
  $sql ="and ".$column_key." Is Null ";
  return $sql;
}
// end of is null function //

// is not null function //
public function isnotull($column_key='',$column_value=''){
    $this->column_key = $column_key;
  $sql ="and ".$column_key." Is Not Null ";
  return $sql;
}

// end of is not null function //

// where not null function //
public function wherenotnull($column_key='',$column_value=''){
    $this->column_key = $column_key;
  $sql ="where ".$column_key." Is Not Null ";
  return $sql;
}

// end of where not null function //

// not equal function //
public function notequal($column_key='',$column_value=''){
    $this->column_key = $column_key;
  $sql ="and ".$column_key." != ".$column_value."";
  return $sql;
}

// end of not equal function //


//end of where class//
}
?>