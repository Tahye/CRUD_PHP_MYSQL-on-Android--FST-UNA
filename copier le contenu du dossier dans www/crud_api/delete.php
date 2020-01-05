<?php
include 'connection.php';

$id = $_POST['id'];

$query = mysqli_query($con, "DELETE FROM data WHERE id = '$id' ");

if($query){
  $response['success'] = 'true';
  $response['message'] = 'Données supprimées avec succès';
}else{
  $response['success'] = 'false';
  $response['message'] = "Échec de suppression ";
}

echo json_encode($response);
?>
