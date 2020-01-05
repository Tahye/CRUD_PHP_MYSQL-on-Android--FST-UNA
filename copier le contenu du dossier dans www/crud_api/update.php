<?php
include 'connection.php';

$id = $_POST['id'];
$uid = $_POST['uid'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = mysqli_query($con, "UPDATE data SET uid = '$uid', name = '$name', phone = '$phone', address = '$address' WHERE id = '$id' ");

if($query){
  $response['success'] = 'true';
  $response['message'] = 'Données modifiées avec succès';
}else{
  $response['success'] = 'false';
  $response['message'] = "Échec de modification";
}

echo json_encode($response);
?>
