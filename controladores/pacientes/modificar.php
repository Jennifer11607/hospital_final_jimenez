<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once '../../includes/header.php';
include_once '../../includes/navbar.php';


require '../../modelos/Paciente.php';

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


if($_POST['paciente_nombre'] != '' && $_POST['paciente_dpi'] != '' && $_POST['paciente_telefono'] != ''){
    try {
        $paciente = new Paciente($_POST);
        $resultado = $paciente->modificar();
        $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
}else{
    $error = "Debe llenar todos los datos";
}

?>

<div class="container full-height d-flex justify-content-center align-items-center">
        <div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-12">
                    <?php if($resultado): ?>
                        <div class="alert alert-success" role="alert">
                            Guardado exitosamente!
                        </div>
                    <?php else :?>
                        <div class="alert alert-danger" role="alert">
                            Ocurrió un error: <?= $error ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <a href="/hospital_final_jimenez/vistas/pacientes/index.php" class="btn btn-info">Regresar al formulario</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>