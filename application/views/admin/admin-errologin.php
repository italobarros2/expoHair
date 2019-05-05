<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login no sistema</title>
    <link rel="stylesheet" href="<?=base_url('static/css/fix1.css')?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/bootstrap/css/bootstrap.min.css')?>">
    <link href="<?=base_url('static/assets/vendor/fonts/circular-std/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('static/assets/libs/css/style.css')?>">
    
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/chartist-bundle/chartist.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/morris-bundle/morris.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/c3charts/c3.css')?>">
    <link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card card-perso">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="" alt="logo"></a><span class="splash-description fixtext" style="margin-top: 10px; font-size: 20px">Login no sistema</span></div>
            <div class="card-body">
				<div class="alert alert-danger" role="alert">
					Dados informados incorretos
				</div>
                <form action="<?=base_url('gerenciamento/autenticate')?>" method="post"><!--?=base_url('static/assets/images/logo.png')?>-->
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Usuário" autocomplete="off" style="margin-top: 12px"><i class="fas fa-user fixicon"></i>
                    </div>
                    <div class="form-group" style="margin-bottom: 25px">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Senha" style="margin-top: 20px"><i class="fas fa-lock fixicon"></i>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:45px">Entrar</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>
