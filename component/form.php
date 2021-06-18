<?php 
    if($rowTotal == $kuisioner['idKuisioner']){?>
        <form action="simpan-jawaban.php" method="post">
            <input type="hidden" name="idKuisioner" value="<?php  echo $kuisioner['idKuisioner']; ?>">
            <input type="hidden" name="idUsers" value="<?php  echo $dataMahasiswa['id']; ?>">
    <?php
    }else{

    ?>
        <form action="pertanyaan.php?p=<?php echo $kuisioner['idKuisioner']+1 ?>" method="post">
            <input type="hidden" name="idKuisioner" value="<?php  echo $kuisioner['idKuisioner']; ?>">
<?php
    }
?>