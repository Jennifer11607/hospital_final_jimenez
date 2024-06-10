<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container full-height d-flex flex-column justify-content-center align-items-center">
        <div class="w-25 text-center mb-4 mt-5" style="font-family:'Courier New', Courier, monospace">
            <h1>BUSCAR ESPECIALIDADES</h1>
        </div>
        <div class="row justify-content-center w-25">
            <form action="/hospital_final_jimenez/controladores/especialidades/buscar.php" method="GET" class="form-container border p-4 rounded" style="font-family:'Courier New', Courier, monospace; background-color: #FFE082">
                <div class="form-group mb-3">
                    <label for="espec_nombre">Especialidad</label>
                    <input type="text" name="espec_nombre" id="espec_nombre" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info btn-small">Buscar</button>
                </div>
            </form>
        </div>
    </div>


    <?php include_once '../../includes/footer.php'?>