<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL); ?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>


<div class="container  mt-5 ">
        <h1 class="text-center mb-4" style="font-family:'Courier New', Courier, monospace">Buscar Pacientes</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/pacientes/buscar.php" method="GET" class="col-lg-6 border  p-3 rounded" style="font-family:'Courier New', Courier, monospace; background-color: #F0B27A ">
                <div class="form-group">
                    <label for="paciente_nombre">Nombre del paciente</label>
                    <input type="text" name="paciente_nombre" id="paciente_nombre" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="paciente_dpi">No. de DPI</label>
                    <input type="text" name="paciente_dpi" id="paciente_dpi" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info btn-sm">Buscar</button>
                </div>
            </form>
        </div>
    </div>


<?php include_once '../../includes/footer.php'?>