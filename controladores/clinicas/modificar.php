<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Clinica.php';

$resultado = false; 

if (isset($_POST['clinica_nombre']) && isset($_POST['clinica_id'])) {
    try {
        $clinica = new Clinica($_POST);
        $resultado = $clinica->modificar();
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

<div class="container mt-5">
        <div class="row align-items-center justify-content-center">
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
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/hospital_final_jimenez/vistas/clinicas/buscar.php" class="btn btn-info btn-block">Regresar al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>