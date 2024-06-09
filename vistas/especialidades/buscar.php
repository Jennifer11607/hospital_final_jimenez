<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Especialidades</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/especialidades/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="espec_nombre">Especialidad</label>
                        <input type="text" name="espec_nombre" id="espec_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>