<?php 

include "qzwin_pdo.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

$qstb = $_POST['qstb'];
$qzid = $_POST['qzid'];
$query= "select * from $qstb where id_quiz = ?";
$stmt= $db->prepare($query);
$stmt->execute(array($qzid));

$arrayo =  array();
while($line=  $stmt->fetch(PDO::FETCH_ASSOC)){
	$arrayo[]=$line;
}
echo json_encode($arrayo);


	
}
?>