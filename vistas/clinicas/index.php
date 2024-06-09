<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);?>



<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
        <div class="container mt-5" style="max-width: 700px; background-color: #2471A3; border: solid 2px; border-color: #fff;">
        <h1 class="text-center"style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">FORMULARIO DE INGRESO CLINICAS</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/clinicas/guardar.php" method="POST" class="col-lg-8 border p-3 mb-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; background-color:#AAB7B8;">
                <div class="row mb-3">
                    <div class="col">
                    <label for="clinica_nombre">Nombre de la Clinica</label>
                        <input type="text" name="clinica_nombre" id="clinica_nombre" class="form-control">
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