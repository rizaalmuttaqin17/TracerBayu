<?php require_once 'assets/phpti/ti.php' ?>
<?php include 'layout/master.php' ?>

<?php startblock('css') ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

<link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
<style>
    .alert.alert-custom.alert-white .alert-icon i {
        color: black !important;
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
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results)> 0) {
    $dataMahasiswa = mysqli_fetch_assoc($results);
}else {
    array_push($errors, "Wrong email/password combination");
}
?>
<div class="row">
    <div class="col-xl-7">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Profile</h3>
                </div>
            </div>
            <div class="card-body px-0">
                <div class="col-xl-10 my-2">
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                        <div class="col-9">
                            <input type="hidden" name="id" value="<?php echo $dataMahasiswa['id']; ?>">
                            <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar"
                                style="background-image: url(assets/media/users/blank.png)">
                                <div class="image-input-wrapper"  style="background-image: url('foto_profile/<?php echo $dataMahasiswa['foto']; ?>')"></div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Nama</label>
                        <div class="col-9">
                            <input class="form-control " name="nama" type="text" value="<?php echo $dataMahasiswa['nama']; ?>"
                                disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">NIM</label>
                        <div class="col-9">
                            <input class="form-control " name="nim" type="text" value="<?php echo $dataMahasiswa['nim']; ?>"
                                disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Prodi</label>
                        <div class="col-9">
                            <select class="form-control" id="id_jurusan_prodi" name="id_jurusan_prodi" disabled>
                                <option >Pilih Prodi</option>
                            <?php 
                                $query = "SELECT * FROM jurusan_prodi ";
                                $results = mysqli_query($db, $query);
                                if (mysqli_num_rows($results)> 0) {
                                    while($data = mysqli_fetch_assoc($results)){
                                        $idJurusanProdi = $dataMahasiswa['id_jurusan_prodi'];
                                        $jurusan_prodi = $data['jurusan_prodi'];
                                        $iDJurusanProdi = $data['id'];
                                        if ($data['id'] == $dataMahasiswa['id_jurusan_prodi']) {
                                            
                                            echo "<option value='$idJurusanProdi' selected>$jurusan_prodi</option>";
                                        }else{
                                            echo "<option value='$iDJurusanProdi'>$jurusan_prodi</option>";
                                        }
                                    }
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Tahun Angkatan</label>
                        <div class="col-9">
                            <input class="form-control " type="text"
                                value="<?php echo $dataMahasiswa['tahun_angkatan']; ?>" name="tahun_angkatan" disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Tempat Lahir</label>
                        <div class="col-9">
                            <input class="form-control " type="text"
                                value="<?php echo $dataMahasiswa['tempat_lahir']; ?>" name="tempat_lahir" disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Tanggal Lahir</label>
                        <div class="col-9">
                            <input class="form-control " type="date"
                                value="<?php echo $dataMahasiswa['tanggal_lahir']; ?>" name="tanggal_lahir" disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">No. HP</label>
                        <div class="col-9">
                            <div class="input-group input-group-lg ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-phone"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control "
                                    value="<?php echo $dataMahasiswa['no_hp']; ?>" placeholder="Phone" name="no_hp" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Alamat</label>
                        <div class="col-9">
                            <textarea class="form-control" name="alamat" id="alamat"
                                rows="3" disabled><?php echo $dataMahasiswa['alamat']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="mahasiswa.php" class="btn btn-primary mr-2" style="float: left;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>

<?php startblock('js') ?>


<script src="assets/js/pages/custom/user/edit-user.js"></script>
<?php endblock() ?>