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
<?php startblock('menu-item-here-kuisioner') ?>
menu-item-here
<?php endblock() ?>

<?php startblock('konten') ?>
<form action="edit-kuisioner-simpan.php" method="post">
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h1> Edit Kuisioner </h1>
                    </div>
                    <div class="card-toolbar">
                        <button class="btn btn-primary"><i class="fas fa-save    "></i> Simpan</button>
                    </div>
                </div>
            </div>
            <?php
                $sql = 'SELECT * FROM kuisioner WHERE id = '.$_GET["id"];
                $results = mysqli_query($db, $sql);
                while($data = mysqli_fetch_assoc($results)){
                    ?>
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                            <div class="form-group" >
                                        <label>Pertanyaan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="pertanyaan"  value="<?php echo $data['pertanyaan']; ?>">
                                        <input type="hidden" class="form-control" name="idKuisioner"  value="<?php echo $data['id']; ?>">
                                    </div>
                            </div>
                            <hr>
                            <div class="card-body">
                            <?php
                                $sql = 'SELECT * FROM kuisioner_pilihan WHERE id_kuisioner='.$data['id'];
                                $results2 = mysqli_query($db, $sql);
                                while($dataPilihan = mysqli_fetch_assoc($results2)){
                                    ?>
                                        <div class="d-flex align-items-center mb-5">
                                            <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                            <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4"></label>
                                            <div class="d-flex flex-column flex-grow-1">
                                                <span class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">
                                                    <input type="text" class="form-control" name="pilihanKuisioner[]"  value="<?php echo $dataPilihan['pilihan']; ?>">
                                                    <input type="hidden" class="form-control" name="idKuisioner[]"  value="<?php echo $dataPilihan['id']; ?>">
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
            ?>
        </div>
    </div>
</form>
<?php endblock() ?>

<?php startblock('js') ?>


<?php endblock() ?>