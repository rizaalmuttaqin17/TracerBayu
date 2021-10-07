
<?php 

    $sqlPilihan = "SELECT * FROM kuisioner_pilihan WHERE id_kuisioner=$idKuisioner";
    $sqlQueryPilihan = mysqli_query($db, $sqlPilihan);

    $sqlKuisioner = "SELECT jawaban.id, id_user, id_kuisioner, id_kuisioner_pilihan, jawaban, MAX(jawaban.created_at),nama FROM users,jawaban WHERE id_kuisioner=$idKuisioner GROUP BY id_user ORDER BY id;";
    $sqlQuery = mysqli_query($db, $sqlKuisioner);
    $jumlahPengisi = mysqli_num_rows($sqlQuery);

    
?>
<table class="table table-striped table-inverse ">
    <thead class="thead-inverse">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Jawaban</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                while ($rowPilihanUser = mysqli_fetch_array($sqlQuery)) {
                    ?>
                        <tr>    
                            <td><?php echo $rowPilihanUser['nama'] ?></td>
                            <td><?php echo $rowPilihanUser['jawaban'] ?></td>
                        </tr>
                    <?php 
                    $resultsPilihanUser[] = $rowPilihanUser;
                }
            ?>

            
        </tbody>
</table>
