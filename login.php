<?php require_once 'assets/phpti/ti.php' ?>
<?php include 'database/connection.php' ?>
<?php include 'layoutAuth.php' ?>

<?php startblock('login') ?>
<div class="login-form">
    <div class="text-center mb-10 mb-lg-20">
        <h3 class="font-size-h1">Masuk</h3>
        <p class="text-muted font-weight-bold">Masukkan email dan password Kalian</p>
    </div>
    <form class="form" method="POST" action="login.php">
        <?php include('errors.php'); ?>
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" required/>
        </div>
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" required/>
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
            <a href="forgot-password.php" class="text-dark-50 text-hover-primary my-3 mr-2">
                Lupa Password ?
            </a>
            <button type="submit" name="login" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Masuk</button>
        </div>
    </form>
</div>
<?php endblock() ?>