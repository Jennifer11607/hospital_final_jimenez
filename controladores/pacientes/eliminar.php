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



    try {
        $paciente = new Paciente($_GET);
        $resultado = $paciente->eliminar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }

?>

<div class="container full-height d-flex justify-content-center align-items-center">
        <div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-12">
                    <?php if($resultado): ?>
                        <div class="alert alert-success" role="alert">
                            Eliminado exitosamente!
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
                    <a href="/hospital_final_jimenez/controladores/pacientes/buscar.php" class="btn btn-info">Volver al formulario</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>