<h1 class="text-center mb-5 text-primary">CONTROL DE LLUVIAS</h1>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <!-- Imagen ajustada a diferentes tamaños de pantalla -->
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
            <img src="<?= asset('./images/login.jpeg') ?>" alt="Logo" class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>

        <!-- Formulario de inicio de sesión -->
        <form class="col-lg-4 col-md-6 col-sm-12 border rounded shadow p-4 bg-light">
            <h3 class="text-center mb-4 text-secondary"><b>INICIO DE SESIÓN</b></h3>
            <div class="row mb-3">
                <div class="col">
                    <label for="usu_codigo" class="form-label">Ingrese su Código</label>
                    <input type="number" name="usu_codigo" id="usu_codigo" class="form-control" placeholder="Ingrese código">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="usu_password" class="form-label">Contraseña</label>
                    <input type="password" name="usu_password" id="usu_password" class="form-control" placeholder="Ingresar contraseña">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100 btn-lg">
                        Iniciar sesión
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?=  asset('/build/js/login/login.js' )?>" ></script>
