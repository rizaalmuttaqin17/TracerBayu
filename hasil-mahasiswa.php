<?php require_once 'assets/phpti/ti.php' ?>
<?php include 'layout/master.php' ?>

<?php startblock('css') ?>
<link rel="stylesheet" href="assets/css/pilihan.css">
<link rel="stylesheet" href="assets/css/rating.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
<style>
    .radio-list{
        margin:20px;
    }
    .rating:hover{
        background-color: aliceblue;
    }
</style>
<?php endblock() ?>
<?php startblock('menu-item-here-mahasiswa') ?>
menu-item-here
<?php endblock() ?>

<?php startblock('konten') ?>
<?php 
$dataMahasiswa = "";
$idMahasiswa = $_GET['q'];
$query = "SELECT * FROM users WHERE id=".$idMahasiswa;
$results =mysqli_fetch_assoc(mysqli_query($db, $query));
?>
 <div class="row">
    <div class="col-xl-12">
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h1 >
                <a  style="margin-right:20px;" class="btn btn-dark font-weight-bold" href="mahasiswa.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali  </a> Kuisioner <?php echo $results['nim']." - ".$results['nama']; ?>
                </h1>
            </div>
        </div>
    </div>
        <?php
            $i=1;
            $sql = 'SELECT kuisioner.id as idKuisioner, kuisioner.pertanyaan, kuisioner_pilihan.type_pilihan as type_pilihan, kuisioner_pilihan.pilihan as jawaban,jawaban.jawaban as jawaban2 FROM kuisioner, jawaban, users, kuisioner_pilihan WHERE kuisioner.id = jawaban.id_kuisioner AND kuisioner_pilihan.id_kuisioner = kuisioner.id AND jawaban.id_kuisioner_pilihan = kuisioner_pilihan.id AND jawaban.id_user = '.$idMahasiswa.'  AND users.id = '.$idMahasiswa.' GROUP BY kuisioner.id';
            $results = mysqli_query($db, $sql);
            while($data = mysqli_fetch_assoc($results)){
                if($data['type_pilihan'] == "Pilih"){
                    ?>
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                <?php echo $i++.". ".$data['pertanyaan']; ?>

                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo $data['jawaban'] ?>
                        </div>
                    </div>
                    <?php
                }else if($data['type_pilihan'] == "PilihIsi"){
                    ?>
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    <?php echo $i++.". ".$data['pertanyaan']; ?>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo $data['jawaban']. " ".$data['jawaban2']; ?>
                        </div>
                    </div>
                    <?php
                    
                }else if($data['type_pilihan'] == "Isi"){
                    $sqlIsi = "SELECT *  FROM kuisioner_pilihan,kuisioner WHERE kuisioner.id = ".$data['idKuisioner']."  AND kuisioner_pilihan.id_kuisioner = kuisioner.id ";
                    $resultsIsi = mysqli_query($db, $sqlIsi);
                    if(mysqli_num_rows($resultsIsi)==1){
                        ?>
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        <?php echo $i++.". ".$data['pertanyaan']; ?>

                                    </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php echo $data['jawaban2'] ?>
                            </div>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        <?php echo $i++.". ".$data['pertanyaan']; ?>

                                    </h3>
                                </div>
                            </div>
                            <div class="card-body">
                            <?php
                            
                                $sqlRating = "SELECT kuisioner_pilihan.pilihan AS pilihan, jawaban.jawaban  FROM jawaban, kuisioner_pilihan,users WHERE jawaban.id_kuisioner = ".$data['idKuisioner']."  AND kuisioner_pilihan.id = jawaban.id_kuisioner_pilihan AND jawaban.id_user=users.id AND users.id = ".$idMahasiswa." ";
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
                                                    
                                                    <span class="text-dark-75 font-weight-bolder"><?php echo "Rp. " .  number_format($dataRating['jawaban'] , 0, ",", "."); ?>
                                                
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <?php 
                                }
                            ?>

                            </div>
                        </div>
                        <?php
                    }
                    
                }else if($data['type_pilihan'] == "Rating"){
                    
                    ?>

                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                <?php echo $i++.". ".$data['pertanyaan']; ?>

                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            
                                $sqlRating = "SELECT kuisioner_pilihan.pilihan AS pilihan, jawaban.jawaban  FROM jawaban, kuisioner_pilihan,users WHERE jawaban.id_kuisioner = ".$data['idKuisioner']."  AND kuisioner_pilihan.id = jawaban.id_kuisioner_pilihan AND jawaban.id_user=users.id AND users.id = ".$idMahasiswa." ";
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
                                                    
                                                    <?php 
                                                        for ($j=0; $j < $dataRating['jawaban']; $j++) { 
                                                            ?>
                                                            <i class="fa fa-star" style="color: orange;" aria-hidden="true"></i>
                                                            <?php
                                                        }
                                                    ?><span class="text-dark-75 font-weight-bolder"><?php echo $dataRating['jawaban'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <?php 
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                    
                }else if($data['type_pilihan'] == "PilihBanyak"){
                    ?>
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                <?php echo $i++.". ".$data['pertanyaan']; ?>

                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                        <?php
                            
                            $sqlRating = "SELECT kuisioner_pilihan.pilihan AS pilihan, jawaban.jawaban  FROM jawaban, kuisioner_pilihan,users WHERE jawaban.id_kuisioner = ".$data['idKuisioner']."  AND kuisioner_pilihan.id = jawaban.id_kuisioner_pilihan AND jawaban.id_user=users.id AND users.id = ".$idMahasiswa." ";
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
                                    </div>
                                    
                                <?php 
                            }
                        ?>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
<?php endblock() ?>

<?php startblock('js') ?>


<?php endblock() ?>