<?php include 'database/connection.php' ?>

<?php 
$idUsers = $_POST['idUsers'];
$idKuisioner = $_POST['idKuisioner'];
$query = "UPDATE `tracer_bayu`.`users` SET `status_pengisian`='Sudah' WHERE  `id`=$idUsers;";
$results = mysqli_query($db, $query);
header('location: index.php');

?>