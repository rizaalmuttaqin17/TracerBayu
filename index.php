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

<?php startblock('menu-item-here-dashboard') ?>
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
}else {
    array_push($errors, "Wrong email/password combination");
}
?>

<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert" >
    <div class="alert-icon">
        <span class="svg-icon svg-icon-primary svg-icon-xl">
            <i class="fas fa-award fa-3x   "></i>
        </span>
    </div>
    <div class="alert-text">
        <h2 style="font-family: 'PT Sans', sans-serif;"><b class="mr-1" >Hai, <?php echo $dataMahasiswa['nama']; ?> </b> <br > Selamat Datang Di Tracer POLITANI Samarinda.</h2>
    </div>
</div>
<?php 

if($dataMahasiswa['data_diri']== 'Lengkap'){
    if($dataMahasiswa['status_pengisian']== 'Belum'){
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
                            <a href="pertanyaan.php"><button class="btn btn-warning btn-lg">Isi Dulu, ya!</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }else{
        ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                        style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                        <div class="card-body row">
                            <div class="col-md-4">
                                <img src="assets/img/sudah.png" alt="" style="width: 400px; margin:20px">
                            </div>
                            <div class="col-md-8 align-self-center" style="padding-left:80px;">
                                
                                <h1 style="font-family: 'PT Sans', sans-serif;font-size:40px;">Kamu  sudah menyelesaikan <br> Pengisian Kuisioner!</h1>
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