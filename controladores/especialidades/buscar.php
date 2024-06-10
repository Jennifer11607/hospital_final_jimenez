<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require '../../modelos/Especialidades.php';
try {
    $especialidad = new Especialidad($_GET);
    $especialidades = $especialidad->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>

<div class="container mt-5">
        <div class="row justify-content-center mb-4">
            <h1 class="text-center" style="font-family:'Courier New', Courier, monospace">TABLA DE ESPECIALIDADES</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 table-container">
                <table class="table table-bordered table-hover" style="font-family:'Courier New', Courier, monospace">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>ESPECIALIDAD</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($especialidades) > 0): ?>
                        <?php foreach($especialidades as $key => $especialidad) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $especialidad['ESPEC_NOMBRE'] ?></td>
                            <td><a class="btn btn-danger btn-sm w-100" style="font-family:'Courier New', Courier, monospace" href="/hospital_final_jimenez/controladores/especialidades/eliminar.php?espec_id=<?= $especialidad['ESPEC_ID']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" class="text-center">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-4 text-center">
                <a href="/hospital_final_jimenez/vistas/especialidades/buscar.php" class="btn btn-info btn-sm w-100 mb-4" style="font-family:'Courier New', Courier, monospace">Regresar a la búsqueda</a>
            </div>
        </div>
    </div>


    <?php include_once '../../includes/footer.php'?>