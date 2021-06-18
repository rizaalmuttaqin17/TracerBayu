<?php 
    $IdUser = $dataMahasiswa['id'];
    $jawaban = $data['idPilihan'];
    $sqlJawaban = "SELECT * FROM jawaban WHERE jawaban.id_kuisioner = '$idKuisioner'  AND jawaban.id_user='$IdUser' ORDER BY created_at DESC LIMIT 1";
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
                    <input type="radio" name="pertanyaan" id="pilihIsi" value="<?php echo $data['idPilihan'] ?>" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'])?"checked":"" ?> required>
                    <span></span>
                    <div class="form-group">
                        <?php echo $data['pilihan']; ?>
                        <input type="text" class="form-control" name="pertanyaanPilihIsi" onclick="document.getElementById('pilihIsi').checked = true;" value="<?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'])?$jawaban['jawaban']:"" ?>" placeholder="">
                    </div>
                <?php
            }else{
                ?>
                    <input type="radio" name="pertanyaan" id="pilihIsi" value="<?php echo $data['idPilihan'] ?>" required>
                    <span></span>
                    <div class="form-group">
                        <?php echo $data['pilihan']; ?>
                        <input type="text" class="form-control" name="pertanyaanPilihIsi" onclick="document.getElementById('pilihIsi').checked = true;" placeholder="">
                    </div>
                <?php
            }
        ?>
        
    </label>
</div>