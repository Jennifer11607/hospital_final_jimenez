<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);?>


<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

    <div class="container">
        <h1 class="text-center">FORMULARIO INGRESAR PACIENTES</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/pacientes/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                    <label for="paciente_nombre">Nombre del Paciente</label>
                        <input type="text" name="paciente_nombre" id="paciente_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_dpi">No. de DPI</label>
                        <input type="number" name="paciente_dpi" id="paciente_dpi" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_telefono">No. de telefono</label>
                        <input type="number" name="paciente_telefono" id="paciente_telefono" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>