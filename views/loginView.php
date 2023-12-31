<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?= media();?>/css/pace.min.css" rel="stylesheet" />
    <script src="<?= media();?>/js/pace.min.js"></script>

    <!--plugins-->
    <link href="<?= media();?>/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?= media();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= media();?>/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= media();?>/css/style.css" rel="stylesheet">
    <link href="<?= media();?>/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title><?= $data['page_title']; ?></title>

    <link rel="icon" href="<?= media();?>/img/logo.ico">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= media();?>/css/sweetalert2.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center mb-4 mt-2">
                                <img src="<?= media();?>/img/logo.png" alt="Logo de Grupo Inkillay" width="100%">
                            </div>
                            <form class="form-body row g-3" id="formularioLogin" name="formularioLogin" method="POST">
                                <div class="col-12">
                                    <label class="form-label">RUC</label>
                                    <input type="text" class="form-control" id="ruc" name="ruc" maxlength="11"
                                        pattern="[0-9]+" title="Solo se permiten números">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario"
                                        value="">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="g-recaptcha" data-sitekey="6LfQkbQoAAAAAGW08bs_tK9W167IHfCtcHH_5mdA">
                                    </div>
                                </div> 
                                <div class="col-12 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="recordarme"
                                            value="1">
                                        <label class="form-check-label" for="flexSwitchCheckRemember">Recordar</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 text-end">
                                    <a href="<?= base_url()?>/recuperarcontrasena">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid m-2">
                                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- JS -->
    <script>
    const base_url = "<?= base_url(); ?>";
    </script>
    <script src="<?= media(); ?>/js/validarcredenciales.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= media();?>/js/sweetalert2.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
</body>

</html>