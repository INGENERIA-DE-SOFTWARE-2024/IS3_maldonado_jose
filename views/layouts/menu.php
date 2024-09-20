<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= asset('build/js/app.js') ?>"></script>
    <link rel="shortcut icon" href="<?= asset('images/cit.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <title>Desastres provocados por lluvias</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/ejemplo/">
                <img src="<?= asset('./images/cit.png') ?>" width="35px'" alt="cit">
                LLUVIAS
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/IS3_maldonado_jose/ejemplo/"><i class="bi bi-house-fill me-2"></i>Inicio</a>
                    </li>

                    <?php if ($_SESSION['user']['rol_nombre_ct'] == "COMANDO" || $_SESSION['user']['rol_nombre_ct'] == "ADMINISTRADOR") : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/IS3_maldonado_jose/lluvias"><i class="bi bi-send me-2"></i>Lluvias</a>
                    </li>
                <?php endif; ?>

                <?php if ($_SESSION['user']['rol_nombre_ct'] == "D5" || $_SESSION['user']['rol_nombre_ct'] == "ADMINISTRADOR") : ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-send-check me-2"></i>Información de Lluvias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item text-white" href="/IS3_maldonado_jose/estadistica">
                                    <i class="bi bi-bar-chart-steps me-2"></i>Estadística
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="/IS3_maldonado_jose/mapa">
                                    <i class="bi bi-geo"></i>Lluvias en la carta
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                        </ul>
                <div class="col-lg-1 d-grid mb-lg-0 mb-2">
                    <!-- Ruta relativa desde el archivo donde se incluye menu.php -->
                    <a href="/IS3_maldonado_jose/logout" class="btn btn-danger"><i class="bi bi-arrow-bar-left"></i>Salir</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="progress fixed-bottom" style="height: 6px;">
        <div class="progress-bar progress-bar-animated bg-danger" id="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container-fluid pt-5 mb-4" style="min-height: 85vh">

        <?php echo $contenido; ?>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p style="font-size:xx-small; font-weight: bold;">
                    Lluvias, AF MALDONADO MORALES, <?= date('Y') ?> &copy;
                </p>
            </div>
        </div>
    </div>
</body>

</html>
<script src="<?= asset('./build/js/inicio/index.js') ?>"></script>