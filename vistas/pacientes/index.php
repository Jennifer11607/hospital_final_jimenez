<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);?>


<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container mt-5" style="max-width: 700px; background-color: #2471A3; border: solid 2px; border-color: #fff;">
        <h1 class="text-center mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> FORMULARIO INGRESAR PACIENTES</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/pacientes/guardar.php" method="POST" class="col-lg-6 border p-4 rounded mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; background-color:#AAB7B8;">
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_nombre" class="form-label" >Nombre del Paciente</label>
                        <input type="text" name="paciente_nombre" id="paciente_nombre" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_dpi" class="form-label">No. de DPI</label>
                        <input type="number" name="paciente_dpi" id="paciente_dpi" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_telefono" class="form-label" >No. de teléfono</label>
                        <input type="number" name="paciente_telefono" id="paciente_telefono" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary btn-sm" style="width: 150px;">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>