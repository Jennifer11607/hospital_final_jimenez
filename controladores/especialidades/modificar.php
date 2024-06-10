<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Especialidades.php';

$resultado = false; 

if (isset($_POST['espec_nombre']) && isset($_POST['espec_id'])) {
    try {
        $especialidad = new Clinica($_POST);
        $resultado = $especialidad->modificar();
        $error = "NO se modificó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2) {
        $error = $e2->getMessage();
    }
} else {
    $error = "Debe llenar todos los datos";
}

?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($resultado): ?>
                    <div class="alert alert-success" role="alert">
                        Modificado exitosamente!
                    </div>
                <?php else :?>
                    <div class="alert alert-danger" role="alert">
                        Ocurrió un error: <?= $error ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="/hospital_final_jimenez/vistas/especialidades/buscar.php" class="btn btn-info">Regresar al formulario</a>
            </div>
        </div>
    </div>

    <?php include_once '../../includes/footer.php'?>