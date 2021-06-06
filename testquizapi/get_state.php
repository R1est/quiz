<?php 

include "dbcqz.php" ;
$query=  "select * from status where state = 0 " ;
//"select * from status where qz_st_id = 1  and usr_st_id = 1 ";
$result= mysqli_query($connect, $query);
if(! $result){
	die("error in query");
}
$arr = array();
while ($row= mysqli_fetch_assoc($result)) {
	$arr[]=$row;
}
echo json_encode($arr);
?>
