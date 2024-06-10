<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Clinica.php';
try {
    $clinica = new Clinica($_GET);
    $clinicas = $clinica->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>CLINICA</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($clinicas) > 0):?>
                        <?php foreach($clinicas as $key => $clinica) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $clinica['CLINICA_NOMBRE'] ?></td>
                            <td><a class="btn btn-warning w-100" href="/hospital_final_jimenez/vistas/clinicas/modificar.php?clinica_id=<?= $clinica['CLINICA_ID']?>">Modificar</a></td>
                            <td><a class="btn btn-danger w-100" href="/hospital_final_jimenez/controladores/clinicas/eliminar.php?clinica_id=<?= $clinica['CLINICA_ID']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="4">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/hospital_final_jimenez/vistas/clinicas/buscar.php" class="btn btn-info w-100">Regresar a la búsqueda</a>
            </div>
        </div>
    </div>

    <?php include_once '../../includes/footer.php'?>