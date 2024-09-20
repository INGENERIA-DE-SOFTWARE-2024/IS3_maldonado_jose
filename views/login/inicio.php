<h1 class="text-center my-5 display-4 font-weight-bold text-uppercase text-primary">
    Bienvenido al control de eventos de lluvias del Ejército de Guatemala
</h1>

<?php if ($_SESSION['user']['rol_nombre_ct'] == 'COMANDO') : ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card text-center shadow-lg border-0 rounded-lg" style="background: linear-gradient(135deg, #007bff 0%, #00d2ff 100%);">
                    <div class="card-header text-white" style="font-size: 1.5rem;">
                        Bienvenido a esta app del MINDEF, <strong><?= $_SESSION['user']['usu_nombre'] ?></strong>.
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title font-weight-bold">Has ingresado con éxito a esta app de control.</h5>
                        <p class="card-text">LLUVIAS</p>
                    </div>
                    <div class="card-footer text-light border-0">
                        Su acceso como señor Comandante de su dependencia militar permite ver el estado de sus operaciones.
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($_SESSION['user']['rol_nombre_ct'] == 'D5') : ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card text-center shadow-lg border-0 rounded-lg" style="background: linear-gradient(135deg, #ffc107 0%, #ff7b00 100%);">
                    <div class="card-header text-white" style="font-size: 1.5rem;">
                        ¡Bienvenido a esta app de control, <strong><?= $_SESSION['user']['usu_nombre'] ?></strong>!
                    </div>
                    <div class="card-body text-white">
                        <p class="card-text">Su acceso como D5 le permite ver estadísticas y mapas.</p>
                    </div>
                    <div class="card-footer text-light border-0">
                        Desde su calidad de D5, usted cuenta con los accesos a ver estadísticas y mapas a nivel nacional.
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($_SESSION['user']['rol_nombre_ct'] == 'ADMINISTRADOR') : ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card text-center shadow-lg border-0 rounded-lg" style="background: linear-gradient(135deg, #dc3545 0%, #ff5e72 100%);">
                    <div class="card-header text-white" style="font-size: 1.5rem;">
                        ¡Bienvenido, <strong><?= $_SESSION['user']['usu_nombre'] ?></strong>!
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title font-weight-bold">Usted tiene el rol de administrador</h5>
                        <p class="card-text">Control operacional de eventos catastróficos.</p>
                    </div>
                    <div class="card-footer text-light border-0">
                        Desde su calidad de administrador, usted cuenta con los accesos a ver estadísticas, estados operacionales y mapas a nivel nacional.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
