<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/Clinica.php';

try {
    if(isset($_GET['espec_id']) && $_GET['espec_id'] != ''){
        $espec_id = $_GET['espec_id'];
        $especialidad = new Especialidad(["espec_id" => $espec_id]);
        $especialidades = $especialidad->buscar();
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Especialidad</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/clinicas/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="espec_id" value="<?= $especialidades[0]['ESPEC_ID'] ?>">
                <div class="row mb-3">
                    <div class="col">
                        <label for="espec_nombre">Nombre de la Especialidad</label>
                        <input type="text" name="espec_nombre" id="espec_nombre" value="<?= $especialidades[0]['ESPEC_NOMBRE'] ?>" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>
