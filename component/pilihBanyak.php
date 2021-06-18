<?php 
    $IdUser = $dataMahasiswa['id'];
    $jawaban = $data['idPilihan'];
    $sqlJawaban = "SELECT * FROM jawaban WHERE jawaban.id_kuisioner = '$idKuisioner' AND jawaban.id_kuisioner_pilihan = '$jawaban'  AND jawaban.id_user='$IdUser' ORDER BY created_at DESC LIMIT 1";
    $sqlQuery = mysqli_query($db, $sqlJawaban);
    if(mysqli_num_rows($sqlQuery)>0){
        $jawaban = mysqli_fetch_assoc(mysqli_query($db, $sqlJawaban));
    }
?>


<div class="radio-list">
    <label class="radio">
        <?php
            if(mysqli_num_rows($sqlQuery) > 0){
                ?>
                    <input type="checkbox" class="checkbox" name="pertanyaanPilihBanyak[]" value="<?php echo $data['idPilihan'] ?>"  <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'])?"checked":"" ?>>


                <?php
            }else{
                ?>
                    <input type="checkbox" class="checkbox" name="pertanyaanPilihBanyak[]" value="<?php echo $data['idPilihan'] ?>">
                <?php
            }
        ?>
        <span></span>
        <?php echo $data['pilihan']; ?>
    </label>
</div>
