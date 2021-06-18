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
<?php startblock('menu-item-here-pertanyaan') ?>
menu-item-here
<?php endblock() ?>
<?php startblock('konten') ?>
<?php 
$dataMahasiswa = "";
$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results)> 0) {
    $dataMahasiswa = mysqli_fetch_assoc($results);
    if(isset($_POST['idKuisioner'])){
        $IdUser = $dataMahasiswa['id'];
        $idKuisioner = $_POST['idKuisioner'];
        $sql = "";
        if (isset($_POST['pertanyaan'])) {
            $jawaban = $_POST['pertanyaan'];
            $sql = "INSERT INTO `tracer_bayu`.`jawaban` (`id_user`, `id_kuisioner_pilihan`, `id_kuisioner`, `jawaban`,`created_at`) VALUES ('$IdUser', '$jawaban', '$idKuisioner', '$jawaban',NOW())";
            if (isset($_POST['pertanyaanPilihIsi'])) { 
                $jawabanPertanyaan = $_POST['pertanyaanPilihIsi'];
                $jawabanPilihan = $_POST['pertanyaan'];
                $sql = "INSERT INTO `tracer_bayu`.`jawaban` (`id_user`, `id_kuisioner_pilihan`, `id_kuisioner`, `jawaban`,`created_at`) VALUES ('$IdUser', '$jawabanPilihan', '$idKuisioner', '$jawabanPertanyaan',NOW())";
            }
            mysqli_query($db, $sql);
        } else if (isset($_POST['pertanyaanIsi'])) { 
            $i = 0;
            $idPertanyaan = $_POST['idPertanyaan'];
            foreach ($_POST['pertanyaanIsi'] as $item) {
                $sql = "INSERT INTO `tracer_bayu`.`jawaban` (`id_user`, `id_kuisioner_pilihan`,  `id_kuisioner`, `jawaban`,`created_at`) VALUES ('$IdUser','$idPertanyaan[$i]', '$idKuisioner', '$item',NOW())";
                mysqli_query($db, $sql);
                $i++;
            }

        }else if (isset($_POST['pertanyaanPilihBanyak'])) { 
            foreach($_POST['pertanyaanPilihBanyak'] as $item){
                $sql = "INSERT INTO `tracer_bayu`.`jawaban` (`id_user`, `id_kuisioner_pilihan`, `id_kuisioner`, `jawaban`,`created_at`) VALUES ('$IdUser', '$item', '$idKuisioner', '$item',NOW())";
                mysqli_query($db, $sql);
            }
        }else if (isset($_POST['rating'])) { 
            foreach($_POST['rating'] as $item){
                $jawaban = explode(":",$item);
                if(COUNT($jawaban)>1){
                    $id_kuisioner_pilihan = $jawaban[1];
                    $jawabanRating = $jawaban[0];
                    $sql = "INSERT INTO `tracer_bayu`.`jawaban` (`id_user`, `id_kuisioner_pilihan`, `id_kuisioner`, `jawaban`,`created_at`) VALUES ('$IdUser', '$id_kuisioner_pilihan', '$idKuisioner', '$jawabanRating',NOW())";
                    mysqli_query($db, $sql);
                }
            }
        }
    }
}else {
    array_push($errors, "Wrong email/password combination");
}
?>

<?php 

if($dataMahasiswa['data_diri']== 'Lengkap'){
    if($dataMahasiswa['status_pengisian']== 'Belum' || isset($_GET['p'])){
        if(!isset($_GET['p'])){
            ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                        <div class="card-body row">
                            <div class="col-md-4">
                                <img src="assets/img/success.png" alt="" style="width: 400px; margin:20px">
                            </div>
                            <div class="col-md-8 align-self-center" style="padding-left:80px;">
                                
                                <h1 style="font-family: 'PT Sans', sans-serif;font-size:40px;">Kamu Belum Mengisi Kuisioner!</h1>
                                <a href="pertanyaan.php?p=1"><button class="btn btn-warning btn-lg">Mulai Isi!</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }else{
            $idKuisioner = $_GET['p'];

            $kuisioner = "";
            $query = "SELECT kuisioner.id AS idKuisioner,pertanyaan,kuisioner_pilihan.id AS idPilihan,type_pilihan, pilihan FROM kuisioner,kuisioner_pilihan WHERE kuisioner.id = kuisioner_pilihan.id_kuisioner AND kuisioner.id=$idKuisioner";
            $getPertanyaan = mysqli_query($db, $query);
            $results = mysqli_query($db, $query);

            $query2 = "SELECT * FROM kuisioner";
            $results2 = mysqli_query($db, $query2);
            $rowTotal = mysqli_num_rows($results2);


            if (mysqli_num_rows($results)> 0) {
                $kuisioner = mysqli_fetch_assoc($getPertanyaan);
                ?>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-custom gutter-b ">
                            <?php require('component/form.php'); ?>
                            <div class="card-header">
                                <h1 class="card-title" style="font-size:30px;padding:20px;">
                                    <?php echo $_GET['p']. ". ".$kuisioner['pertanyaan']; ?>
                                </h1>
                            </div>
                            <div class="card-body">
                                <?php
                                    while($data = mysqli_fetch_assoc($results)){
                                        if($data['type_pilihan'] == "Pilih"){
                                            require('component/pilih.php');
                                        }else if($data['type_pilihan'] == "PilihIsi"){
                                            require('component/pilihIsi.php');
                                        }else if($data['type_pilihan'] == "Isi"){
                                            require('component/isi.php');
                                        }else if($data['type_pilihan'] == "Rating"){
                                            require('component/rating.php');
                                        }else if($data['type_pilihan'] == "PilihBanyak"){
                                            require('component/pilihBanyak.php');
                                        }
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a  style="margin-right:20px;" class="btn btn-secondary font-weight-bold" href="pertanyaan.php?p=<?php echo $kuisioner['idKuisioner']-1 ?>">
                                    Kembali
                                </a>
                                <button class="btn btn-primary font-weight-bold">Simpan dan lanjut</button>

                            </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php
            }
        }
    ?>
    <?php
    }else{
        ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                        <div class="card-body row">
                            <div class="col-md-4">
                                <img src="assets/img/success.png" alt="" style="width: 400px; margin:20px">
                            </div>
                            <div class="col-md-8 align-self-center" style="padding-left:80px;">
                                
                                <h1 style="font-family: 'PT Sans', sans-serif;font-size:40px;">Kamu  sudah menyelesaikan <br> Pengisian Kuisioner!</h1>
                                <a href="pertanyaan.php?p=1"><button class="btn btn-warning btn-lg">Lihat Kuisionermu!</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
    }
}else{
    ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                <div class="card-body row">
                    <div class="col-md-5">
                        <img src="assets/img/belum_selesai_data_diri.png" alt="" style="width: 600px; margin:20px">
                    </div>
                    <div class="col-md-7 align-self-center" style="padding-left:80px;">
                        
                        <h1 style="font-family: 'PT Sans', sans-serif;font-size:40px;">Kamu belum menyelesaikan <br> pengisian data dirimu!</h1>
                        <a href="profile.php"><button class="btn btn-warning btn-lg">Isi data diri!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>
<?php endblock() ?>

<?php startblock('js') ?>


<?php endblock() ?>