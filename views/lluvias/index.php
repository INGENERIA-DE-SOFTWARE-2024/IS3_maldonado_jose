<h2 class="text-center text-primary">LLUVIAS</h2>
<div class="row justify-content-center mt-4">
    <div class="col-lg-10 table-wrapper">
        <h2 class="text-center mb-4">LLUVIAS FINALIZADAS</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover w-100" id="lluvias">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Dependencia</th>
                        <th>Punto Critico</th>
                        <th>Radio</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    const userRole = '<?= $_SESSION['user']['rol_nombre_ct'] ?>';
</script>
<script src="<?= asset('/build/js/lluvias/index.js') ?>"></script>
