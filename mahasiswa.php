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
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
<?php endblock() ?>

<?php startblock('menu-item-here-mahasiswa') ?>
menu-item-here
<?php endblock() ?>

<?php startblock('konten') ?>
<?php 
    $query = "SELECT users.id AS id, nim, nama, jurusan_prodi.jurusan_prodi as jurusan_prodi,jurusan_prodi.id AS IdJurusan, tahun_angkatan, data_diri, status_pengisian FROM users,jurusan_prodi WHERE role='User' AND users.id_jurusan_prodi = jurusan_prodi.id AND users.nim LIKE '%".$_GET['nim']."%' AND users.nama LIKE '%".$_GET['nama']."%' AND users.id_jurusan_prodi LIKE '%".$_GET['id_jurusan_prodi']."%'";
    $results = mysqli_query($db, $query);
?>
<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert" >

    <div class="alert-text">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <h2 style="font-family: 'PT Sans', sans-serif;">Data Mahasiswa</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-custom gutter-b p-5">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" id="id_jurusan_prodi" name="id_jurusan_prodi">
                                    <option value="">Pilih Prodi</option>
                                <?php 
                                    $query = "SELECT * FROM jurusan_prodi ";
                                    $resultsJurusan = mysqli_query($db, $query);
                                    if (mysqli_num_rows($resultsJurusan)> 0) {
                                        while($data = mysqli_fetch_assoc($resultsJurusan)){
                                            $idJurusanProdi = $dataMahasiswa['id_jurusan_prodi'];
                                            $jurusan_prodi = $data['jurusan_prodi'];
                                            $iDJurusanProdi = $data['id'];
                                            if (isset($_GET['id_jurusan_prodi'])) {
                                                if ($_GET['id_jurusan_prodi'] == $iDJurusanProdi) {
                                                    echo "<option value='$iDJurusanProdi' selected>$jurusan_prodi</option>";
                                                }
                                            }
                                            echo "<option value='$iDJurusanProdi'>$jurusan_prodi</option>";
                                        }
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control " type="text" value="<?php echo (isset($_GET['nama']))?$_GET['nama']:'' ?>" placeholder="Nama"  name="nama" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="NIM" value="<?php echo (isset($_GET['nim']))?$_GET['nim']:'' ?>" name="nim" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary"> <i class="fas fa-search    "></i> Cari</button>
                    </div>
                </div>
            </form>
            
            <table class="table"  id="kt_datatable1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Tahun Angkatan</th>
                        <th>Status Pengisian Data Diri</th>
                        <th>Status Pengisian Kuisioner</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                    while($data = mysqli_fetch_assoc($results)){
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['jurusan_prodi']; ?></td>
                            <td><?php echo $data['tahun_angkatan']; ?></td>
                            <td><?php echo $data['data_diri']; ?></td>
                            <td><?php echo $data['status_pengisian']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="First group">
                                    <?php 
                                        if ($data['data_diri']=='Lengkap') {
                                            ?>
                                                <a href="profile-mahasiswa.php?q=<?php echo $data['id']; ?>" type="button" class="btn btn-success">Profil</a>
                                            <?php
                                        }
                                        if($data['status_pengisian']=='Sudah') {
                                            ?>
                                                <a href="hasil-mahasiswa.php?q=<?php echo $data['id']; ?>&p=1" type="button" class="btn btn-primary">Lihat Kuisioner</a>
                                            <?php
                                        }
                                        if ($data['data_diri']!='Lengkap' && $data['status_pengisian']!='Sudah') {
                                            echo "Belum Mengisi Biodata";
                                        }
                                    ?>
                                </div>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
            <?php 
                if(mysqli_num_rows($results) == 0){
                    ?>
                        <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                            <div class="alert-text">Data tidak ditemukan!</div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<?php endblock() ?>

<?php startblock('js') ?>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

<?php endblock() ?>