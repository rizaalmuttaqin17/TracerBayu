


<?php include 'database/connection.php' ?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <base href="../../../../">
        <meta charset="utf-8"/>
        <title>Masuk | Tracer Politani</title>
        <meta name="description" content="Singin page example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="TracerBayu/assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css"/>
        <link href="TracerBayu/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="TracerBayu/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="TracerBayu/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>

        <link rel="shortcut icon" href="TracerBayu/assets/img/politani-logo.ico"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <style>
        .login.login-3 .login-aside .aside-img {
            background-size: auto; 
            background-color: #116530 ;
        }    
        .flex-column-auto
        {
           background-color: #116530;
        }
        *{
            font-family: 'Rubik'; 
        }
    </style>
<body dy id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading"  >
	<div class="d-flex flex-column flex-root">
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="login-aside d-flex flex-column flex-row-auto ">
                <div class="d-flex flex-column-auto flex-column pt-md-30">
                    <h1 class="font-weight-bolder  display-4 text-center mt-10" style="color: #FFFFFF; ">Selamat Datang</h1>
                </div>
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-position-y-center" style="background-image: url('TracerBayu/assets/img/politani-logo.png'); background-size:400px"></div>
            </div>
            <div class="login-content flex-row-fluid d-flex flex-column p-10" style="background-color: #F3F5F9;" >
                <div class="d-flex flex-row-fluid flex-center">
                    <div class="login-form">
                        <form class="form" id="" method="POST" action="TracerBayu/login.php">
                            <div class="pb-2 pb-md-10">
                                <h3 class="font-weight-bolder text-dark display-4">Masuk</h3>
                                <div class="text-muted font-weight-bold font-size-h5">
                                    Belum Punya Akun? <a href="TracerBayu/register.php" class="text-primary font-weight-bolder">Klik di sini</a>
                                </div>
                            </div>
                            <?php
                                if (array_key_exists("akun",$errors)){
                                    $akun = $errors['akun'];
                                    echo '<div class="alert alert-danger show mb-2 mt-2" role="alert"><strong>'.$akun.'</strong></div>';
                                }
                            ?>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Emailmu</label>
                                <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off"  required/>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" required/>
                            </div>
                            <div class="pb-lg-5 pb-10">
                                <button name="login" type="submit" id="kt_login_singin_form_submit_button" class="btn btn-light  btn-lg btn-block font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" style="background-color: #116530;color:#FFFFFF">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>