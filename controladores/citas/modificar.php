<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Cita.php';

if($_POST['cita_paciente'] != '' && $_POST['cita_medico'] != '' && $_POST['cita_fecha'] != '' && $_POST['cita_hora'] != '' && $_POST['cita_referencia'] != ''  && $_POST['cita_id'] != ''){

    try {
        $cita = new Cita($_POST);
        $resultado = $cita->modificar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
}else{
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
                <a href="/hospital_final_jimenez/controladores/citas/buscar.php?paciente_nombre=<?= $_POST['paciente_nombre'] ?>" class="btn btn-info">Regresar al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>
