<?php 

include "qzwin_pdo.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$state= $_POST['state'];
$usid = $_POST['usid'];
$qzid = $_POST['qzid'];
$query= "UPDATE `status` SET `state`= ? where usr_st_id = ? and  qz_st_id = ?";
//"select * from status where qz_st_id = ? and usr_st_id = ?"
$stmt= $db->prepare($query);
$stmt->execute(array($state,$usid,$qzid));

/*$arrayo =  array();
while($line=  $stmt->fetch(PDO::FETCH_ASSOC)){
	$arrayo[]=$line;
}
echo json_encode($arrayo);*/

}

?>









