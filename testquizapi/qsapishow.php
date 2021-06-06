<?php 

include "dbcqz.php" ;
$query= "select * from questions";
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