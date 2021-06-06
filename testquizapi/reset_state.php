<?php 

include "qzwin_pdo.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$state= $_POST['state'];
$query= "UPDATE `status` SET `state`= ? ";
//"select * from status where qz_st_id = ? and usr_st_id = ?"
$stmt= $db->prepare($query);
$stmt->execute(array($state));

/*$arrayo =  array();
while($line=  $stmt->fetch(PDO::FETCH_ASSOC)){
	$arrayo[]=$line;
}
echo json_encode($arrayo);*/

}

?>









