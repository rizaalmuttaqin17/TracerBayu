<?php 
$pilihanJawban =['Tidak Sama Sekali','Kurang','Cukup Besar',' Besar','Sangat Besar'];
    $sqlPilihan = "SELECT * FROM kuisioner_pilihan WHERE id_kuisioner=$idKuisioner";
    $sqlQueryPilihan = mysqli_query($db, $sqlPilihan);

    $sqlKuisioner = "SELECT * FROM jawaban WHERE jawaban.id_kuisioner = $idKuisioner GROUP BY id_user,id_kuisioner_pilihan;";
    $sqlQuery = mysqli_query($db, $sqlKuisioner);
    $jumlahPengisi = mysqli_num_rows($sqlQuery);

    $resultsPilihan = array();
    while($row = mysqli_fetch_array($sqlQueryPilihan)){
        $resultsPilihan[] = $row;

    }

    $resultsPilihanUser = array();
    while ($rowPilihanUser = mysqli_fetch_array($sqlQuery)) {
        $resultsPilihanUser[] = $rowPilihanUser;
    }
    ?>
    <table class="table table-striped table-inverse ">
        <thead class="thead-inverse">
            <tr>
                <th>Pilihan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>

    <?php
    foreach ($resultsPilihan as  $value) {
        ?>
                <tr> 
                    <td><?php echo $value[3]; ?></td>
                <?php
                $rating = 0;
                $totalUserRating = 0;
                foreach ($resultsPilihanUser as  $rowPilihanUser) {
                    if($value[0] == $rowPilihanUser[3]){
                        $totalUserRating++;
                        $rating+=$rowPilihanUser[4];
                    }
                }
                ?>
                    <td><?php echo $pilihanJawban[(int)($rating/$totalUserRating)-1]; ?></td>
                </tr>
           
        <?php
      
    }
    ?>
        </tbody>

    </table>
    <?php
?>