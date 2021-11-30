<?php
include 'database/connection.php';
// TODO: 
echo var_dump($_POST);
$i = 0;
$pilihanKuisioner = $_POST['pilihanKuisioner'];
$idKuisioner = $_POST['idKuisioner'];
$sql = "UPDATE kuisioner SET pertanyaan='Kapan anda mulai mencari pekerjaan?Mohon pekerjaan sambilan tidak dimasukkann' WHERE  id=1";
while (COUNT($pilihanKuisioner) > $i) {
    $sql = "UPDATE kuisioner_pilihan SET pilihan='$pilihanKuisioner[$i]' WHERE  id=$idKuisioner[$i]";
    mysqli_query($db, $sql);
    $i++;
}
header('Location: edit-kuisioner.php');
?>