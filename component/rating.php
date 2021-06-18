<?php 
    $IdUser = $dataMahasiswa['id'];
    $jawaban = $data['idPilihan'];
    $sqlJawaban = "SELECT * FROM jawaban WHERE jawaban.id_kuisioner = '$idKuisioner' AND jawaban.id_kuisioner_pilihan = '$jawaban'  AND jawaban.id_user='$IdUser' ORDER BY created_at DESC LIMIT 1";
    $sqlQuery = mysqli_query($db, $sqlJawaban);
    if(mysqli_num_rows($sqlQuery)>0){
        $jawaban = mysqli_fetch_assoc(mysqli_query($db, $sqlJawaban));
    }
?>
<div class="row rating">
    <div class="col-md-4" style="padding:20px;">
        <?php echo $data['pilihan']; ?>
        <input type="hidden" name="rating[]" id="<?php echo $data['idPilihan']; ?>">
    </div>
    <?php
        if(mysqli_num_rows($sqlQuery) > 0){
            ?>

                    <div class="col-md-8">
                        <div class="radio-inline" style="padding:20px;">
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="5" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'] && $jawaban['jawaban']==5)?"checked":"" ?>  required>
                                <span></span>
                                Sangat Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="4" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'] && $jawaban['jawaban']==4)?"checked":"" ?>  required>
                                <span></span>
                                Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="3" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'] && $jawaban['jawaban']==3)?"checked":"" ?>  required>
                                <span></span>   
                                Cukup Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="2" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'] && $jawaban['jawaban']==2)?"checked":"" ?>  required>
                                <span></span>
                                Kurang
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="1" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" <?php echo ($jawaban['id_kuisioner_pilihan']==$data['idPilihan'] && $jawaban['jawaban']==1)?"checked":"" ?>  required>
                                <span></span>
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
            <?php
        }else{
            ?>
                    <div class="col-md-8">
                        <div class="radio-inline" style="padding:20px;">
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="5" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" required>
                                <span></span>
                                Sangat Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="4" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)"  required>
                                <span></span>
                                Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="3" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)"  required>
                                <span></span>   
                                Cukup Besar
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="2" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" required>
                                <span></span>
                                Kurang
                            </label>
                            <label class="radio">
                                <input type="radio" name="pertanyaan<?php echo $data['idPilihan'] ?>" value="1" onchange="setValueRadio(<?php echo $data['idPilihan'] ?>)" required>
                                <span></span>
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
            <?php
        }
        ?>

</div>
<script>
function setValueRadio(name){
    $(`#${name}`).val( $(`input[type='radio'][name=pertanyaan${name}]:checked`).val()+`:${name}`);
}

</script>