<?php require_once 'assets/phpti/ti.php' ?>
<?php include 'database/connection.php' ?>
<?php include 'layoutAuth.php' ?>

<?php startblock('register') ?>
<div class="login-form">
    <div class="text-center mb-10 mb-lg-20">
        <h3 class="font-size-h1">Daftar</h3>
        <p class="text-muted font-weight-bold">Isi form dibawah ini untuk membuat akunmu</p>
    </div>
    <form class="form" method="POST" action="register.php">
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Nama Lengkap" name="nama" autocomplete="off" required/>
        </div>
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" required/>
        </div>
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" required/>
        </div>
        <div class="form-group">
            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Confirm password" name="password2" autocomplete="off" />
        </div>
        <div class="form-group">
            <label class="checkbox mb-0">
                <input type="checkbox" name="agree" />
                <span></span> I Agree the <a href="#">terms and conditions</a>
            </label>
        </div>
        <div class="form-group d-flex flex-wrap flex-center">
            <button type="submit" name="register" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
            <a type="button" href="login.php" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</a>
        </div>
    </form>
</div>
<?php endblock() ?>