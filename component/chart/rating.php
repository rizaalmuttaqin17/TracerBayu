

<div class="row">
<?php 
$sqlUser = "SELECT users.id as id, users.nama as nama FROM jawaban,users WHERE jawaban.id_kuisioner=".$idKuisioner." AND users.id = jawaban.id_user GROUP BY jawaban.id_user ";
$resultsUser = mysqli_query($db, $sqlUser);
while($dataUsers = mysqli_fetch_assoc($resultsUser)){
    ?>
    
        <div class="col-md-3">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <?php echo $dataUsers['nama'] ?>

                        </h3>
                    </div>
                </div>
                <div class="card-body">
                <?php

                    $sqlRating = "SELECT kuisioner_pilihan.pilihan AS pilihan, jawaban.jawaban  FROM jawaban, kuisioner_pilihan,users WHERE jawaban.id_kuisioner = ".$idKuisioner."  AND kuisioner_pilihan.id = jawaban.id_kuisioner_pilihan AND jawaban.id_user=users.id AND users.id=".$dataUsers['id'];
                    $resultsRating = mysqli_query($db, $sqlRating);
                    while($dataRating = mysqli_fetch_assoc($resultsRating)){
                        ?>
                            <div class="d-flex align-items-center mb-5">
                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                </label>
                                <div class="d-flex flex-column flex-grow-1">
                                    <span class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                        <?php echo $dataRating['pilihan'] ?>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mt-lg-0 mt-3">
                                    <div class="mr-6">
                                        <span class="text-dark-75 font-weight-bolder"><?php echo $dataRating['jawaban']; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        <?php 
                    }
                ?>

                </div>
            </div>
        </div>

    <?php

}
?>
        </div>
