<?php require_once 'assets/phpti/ti.php' ?>
<?php include 'layout/master.php' ?>

<?php startblock('css') ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
<style>
.alert.alert-custom.alert-white .alert-icon i{
    color: black !important;
}
</style>
<?php endblock() ?>

<?php startblock('menu-item-here-hasil') ?>
menu-item-here
<?php endblock() ?>

<?php startblock('konten') ?>
<?php 
    if (!isset($_GET['p'])) {
        $idKuisioner = 1;
    }else{
        $idKuisioner = $_GET['p'];
    }
    $query = "SELECT kuisioner.id AS idKuisioner,pertanyaan,kuisioner_pilihan.id AS idPilihan,type_pilihan, pilihan FROM kuisioner,kuisioner_pilihan WHERE kuisioner.id = kuisioner_pilihan.id_kuisioner AND kuisioner.id=$idKuisioner GROUP BY idKuisioner";
    $getPertanyaan = mysqli_query($db, $query);
    $results = mysqli_query($db, $query);
    $kuisioner = mysqli_fetch_assoc($getPertanyaan);


?>
<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert" >

    <div class="alert-text">
        <h2 style="font-family: 'PT Sans', sans-serif;"><b class="mr-1" ><?php echo $idKuisioner. ". ".$kuisioner['pertanyaan']; ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-xl-12" style="max-height: 100vh;">
        <div class="card card-custom gutter-b ">
            <div class="card-body">
                <?php
                    while($data = mysqli_fetch_assoc($results)){
                        if($data['type_pilihan'] == "Pilih"){
                            require('component/chart/pilih.php');
                        }else if($data['type_pilihan'] == "PilihIsi"){
                            require('component/pilihIsi.php');
                        }else if($data['type_pilihan'] == "Isi"){
                            require('component/chart/isi.php');
                        }else if($data['type_pilihan'] == "Rating"){
                            require('component/chart/rating.php');
                        }else if($data['type_pilihan'] == "PilihBanyak"){
                            require('component/chart/pilihBanyak.php');
                        }
                    }
                ?>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <?php 
                    if ($idKuisioner > 1) {
                        ?>
                        <a  style="margin-right:20px;" class="btn btn-secondary font-weight-bold" href="hasil.php?p=<?php echo $kuisioner['idKuisioner']-1 ?>">
                            Kembali
                        </a>
                        <?php
                    }
                ?>
                <?php 
                    if ($idKuisioner < 17) {
                        ?>
                                        <a class="btn btn-primary font-weight-bold" href="hasil.php?p=<?php echo $kuisioner['idKuisioner']+1 ?>">Lanjut</a>

                        <?php
                    }
                ?>

            </div>
        </div>
    </div>
</div>

<?php endblock() ?>

<?php startblock('js') ?>


<?php endblock() ?>