<script>
    let labelsPilihan = [];
    let seriesPilihan = [];
</script>
<?php 

    $sqlPilihan = "SELECT * FROM kuisioner_pilihan WHERE id_kuisioner=$idKuisioner";
    $sqlQueryPilihan = mysqli_query($db, $sqlPilihan);

    $sqlKuisioner = "SELECT id, id_user, id_kuisioner, id_kuisioner_pilihan, jawaban, MAX(created_at) FROM jawaban WHERE id_kuisioner=$idKuisioner GROUP BY id_user ;";
    $sqlQuery = mysqli_query($db, $sqlKuisioner);
    $jumlahPengisi = mysqli_num_rows($sqlQuery);

    $resultsPilihan = array();
    $labelsPilihan = [];
    while($row = mysqli_fetch_array($sqlQueryPilihan)){
        $resultsPilihan[] = $row;
        echo '<script>labelsPilihan.push(`'.$row['pilihan'].'`);</script>';

    }

    $resultsPilihanUser = array();
    while ($rowPilihanUser = mysqli_fetch_array($sqlQuery)) {
        $resultsPilihanUser[] = $rowPilihanUser;
    }
    foreach ($resultsPilihan as  $value) {
        $total = 0;
        foreach ($resultsPilihanUser as  $rowPilihanUser) {
            if($value[0] == $rowPilihanUser[3]){
                $total++;
            }
        }

        echo '<script>seriesPilihan.push('.(int)$total.');</script>';

       
    }
?>

<div id="chart_12" class="d-flex justify-content-center"></div>
<script src="assets/js/pages/features/charts/apexcharts.js"></script>
