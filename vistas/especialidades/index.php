<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
        <div class="container mt-5" style="max-width: 700px; background-color: #2471A3; border: solid 2px; border-color: #fff;">
        <h1 class="text-center"style="font-family:'Courier New', Courier, monospace">INGRESO ESPECIALIDADES</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/especialidades/guardar.php" method="POST" class="col-lg-8 border  p-3 mb-4" style="font-family: 'Courier New', Courier, monospace; background-color:#AAB7B8;">
                <div class="row mb-3">
                    <div class="col">
                    <label for="espec_nombre">Nombre de la Especialidad</label>
                        <input type="text" name="espec_nombre" id="espec_nombre" class="form-control">
                    </div>
                </div>
                <div class="button-container text-center">
                        <button type="submit" class="btn btn-primary btn-small">Guardar</button>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>

