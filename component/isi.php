<?php 
    $IdUser = $dataMahasiswa['id'];
    $jawaban = $data['idPilihan'];
    $sqlJawaban = "SELECT * FROM jawaban WHERE jawaban.id_kuisioner = '$idKuisioner' AND jawaban.id_kuisioner_pilihan = '$jawaban' AND jawaban.id_user='$IdUser'  ORDER BY created_at DESC LIMIT 1";
    $sqlQuery = mysqli_query($db, $sqlJawaban);
    if(mysqli_num_rows($sqlQuery)>0){
        $jawaban = mysqli_fetch_assoc(mysqli_query($db, $sqlJawaban));
    }
?>
<div class="form-group">
    <?php echo $data['pilihan']; ?>
    <input type="hidden" name="idPertanyaan[]" value="<?php echo $data['idPilihan'] ?>">
    <?php
            if(mysqli_num_rows($sqlQuery) > 0){
                ?>
                       <input type="text" class="form-control" name="pertanyaanIsi[]" placeholder="" value="<?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'])?$jawaban['jawaban']:"" ?>"  required>
                <?php
            }else{
                ?>
                    <input type="text" class="form-control" name="pertanyaanIsi[]" placeholder="" required>
                <?php
            }
        ?>
</div>