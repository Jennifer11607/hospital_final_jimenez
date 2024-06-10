<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);



include_once '../../includes/header.php';
include_once '../../includes/navbar.php';

$resultado = "";

?>

<div class="container full-height d-flex justify-content-center align-items-center">
        <div class="w-100">
            <h1 class="text-center mb-4 mt-5" style="font-family:'Courier New', Courier, monospace">Buscar Médicos</h1>
            <div class="row justify-content-center">
                <form action="/hospital_final_jimenez/controladores/medicos/buscar.php" method="GET" class="col-lg-6 border p-4 rounded" style="font-family:'Courier New', Courier, monospace; background-color: #7FB3D5">
                    <div class="form-group mb-3">
                        <label for="medico_nombre">Nombre del Médico</label>
                        <input type="text" name="medico_nombre" id="medico_nombre" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="medico_clinica">Clínica Asignada</label>
                        <input type="text" name="medico_clinica" id="medico_clinica" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info btn-sm px-4">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once '../../includes/footer.php'; ?>
