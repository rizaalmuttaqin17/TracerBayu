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
$query = "SELECT COUNT(id) as jumlah FROM users WHERE users.role = 'User'";
$jumlahMahasiswa =mysqli_fetch_assoc(mysqli_query($db, $query));

$query = "SELECT COUNT(id) as jumlah FROM users WHERE users.role = 'User' AND users.data_diri = 'Lengkap'";
$jumlahMahasiswaLengkap =mysqli_fetch_assoc(mysqli_query($db, $query));

$query = "SELECT COUNT(id) as jumlah FROM users WHERE users.role = 'User' AND users.status_pengisian = 'Sudah'";
$jumlahMahasiswaSudah =mysqli_fetch_assoc(mysqli_query($db, $query));
?>
<div class="row">
    <div class="col-xl-6">
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-body d-flex p-0">
                <div class="flex-grow-1 p-20 pb-20 card-rounded flex-grow-1 bgi-no-repeat" style="background-color: #1B283F; background-position: calc(100% + 0.5rem) bottom; background-size: 100% auto; background-image: url(assets/img/politani.jpg)">
                    <h1 class="text-white pb-5 font-weight-bolder">Selamat Datang  <br>Di Tracer Study Politani</h1>

                    <p class="text-white pb-5 font-size-h5">
                        Tracer study merupakan suatu studi yang dapat menyediakan informasi yang bermanfaat bagi kepentingan evaluasi hasil pendidikan tinggi dan selanjutnya dapat digunakan untuk penyempurnaan dan penjaminan kualitas lembaga pendidikan tinggi.
                    </p>

                    <a href="pertanyaan.php" class="btn btn-danger font-weight-bold py-2 px-6">Isi Kuisionermu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-info">
                            <i class="fa fa-users fa-3x" style="color: black;" aria-hidden="true"></i>
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"> <?php echo $jumlahMahasiswa['jumlah']; ?></span>
                        <span class="font-weight-bold text-muted  font-size-sm">Mahasiswa Terdaftar</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-info">
                            <i class="fa fa-file-alt fa-3x" style="color: black;" aria-hidden="true"></i>
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"> <?php echo $jumlahMahasiswaLengkap['jumlah']; ?></span>
                        <span class="font-weight-bold text-muted  font-size-sm">Mahasiswa Telah Melengkapi Biodata</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-info">
                            <i class="fa fa-user-check fa-3x" style="color: black;"aria-hidden="true"></i>
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"> <?php echo $jumlahMahasiswaSudah['jumlah']; ?></span>
                        <span class="font-weight-bold text-muted  font-size-sm">Mahasiswa Selesai Mengisi Kuisioner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

<?php endblock() ?>

<?php startblock('js') ?>


<?php endblock() ?>