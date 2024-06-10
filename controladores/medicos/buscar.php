<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Medico.php';
require_once '../../modelos/Especialidades.php';
require_once '../../modelos/Clinica.php';
try {
    $medico = new Medico($_GET);
    $especialidad = new Especialidad();
    $clinica = new Clinica();
    $medicos = $medico->buscar();
    $especialidades = $especialidad->buscar();
    $clinicas = $clinica->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}
?>

<div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 style="font-family:'Courier New', Courier, monospace">TABLA DE MÉDICOS</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 table-container">
                <table class="table table-bordered table-hover " style="font-family:'Courier New', Courier, monospace">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>NOMBRE</th>
                            <th>ESPECIALIDAD</th>
                            <th>CLÍNICA</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($medicos) > 0):?>
                        <?php foreach($medicos as $key => $medico) : ?>
                            <?php
                            // Verificar si existe en $especialidades y $clinicas
                            $especialidad = isset($especialidades[$key]) ? $especialidades[$key] : '';
                            $clinica = isset($clinicas[$key]) && is_array($clinicas[$key]) ? $clinicas[$key] : array();
                            ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $medico['MEDICO_NOMBRE'] ?></td>
                                <td><?= $especialidad['ESPEC_NOMBRE'] ?></td>
                                <td><?= isset($clinica['CLINICA_NOMBRE']) ? $clinica['CLINICA_NOMBRE'] : '' ?></td>
                                <td><a class="btn btn-warning btn-sm w-100" href="/hospital_final_jimenez/vistas/medicos/modificar.php?medico_id=<?= $medico['MEDICO_ID']?>">Modificar</a></td>
                                <td><a class="btn btn-danger btn-sm w-100" href="/hospital_final_jimenez/controladores/medicos/eliminar.php?medico_id=<?= $medico['MEDICO_ID']?>">Eliminar</a></td>
                            </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="6">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center mb-3 "style="font-family:'Courier New', Courier, monospace">
            <div class="col-lg-4 text-center">
                <a href="/hospital_final_jimenez/vistas/medicos/buscar.php" class="btn btn-info btn-sm w-100">Regresar a la búsqueda</a>
            </div>
        </div>
    </div>

    <?php include_once '../../includes/footer.php'?>