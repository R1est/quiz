<?php 

include "qzwin_pdo.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

//$qzid = $_POST['qzid'];
$usid = $_POST['usid'];
$query= "select * from status where usr_st_id = ?";
//"select * from status where qz_st_id = ? and usr_st_id = ?"
$stmt= $db->prepare($query);
$stmt->execute(array($usid));

$arrayo =  array();
while($line=  $stmt->fetch(PDO::FETCH_ASSOC)){
	$arrayo[]=$line;
}
echo json_encode($arrayo);

}

?>









