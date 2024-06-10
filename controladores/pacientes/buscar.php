<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require '../../modelos/Paciente.php';

include_once '../../includes/header.php';
include_once '../../includes/navbar.php';

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$resultado = ""; 

try {
    $paciente = new Paciente($_GET);
    $pacientes = $paciente->buscar();

    // realiza la asignación a la variable $resultado
    $resultado = "Búsqueda exitosa"; 

} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>

    <div class="container mb-3 text-center">
        <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">TABLA DE PACIENTES</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover mb-3" style="font-family:'Courier New', Courier, monospace">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>NOMBRE</th>
                            <th>DPI</th>
                            <th>TELEFONO</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($pacientes) > 0):?>
                        <?php foreach($pacientes as $key => $paciente) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $paciente['PACIENTE_NOMBRE'] ?></td>
                            <td><?= $paciente['PACIENTE_DPI'] ?></td>
                            <td><?= $paciente['PACIENTE_TELEFONO'] ?></td>
                            <td><a class="btn btn-warning w-100" href="/hospital_final_jimenez/vistas/pacientes/modificar.php?paciente_id=<?= $paciente['PACIENTE_ID']?>">Modificar</a></td>
                            <td><a class="btn btn-danger w-100" href="/hospital_final_jimenez/controladores/pacientes/eliminar.php?paciente_id=<?= $paciente['PACIENTE_ID']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="3">NO HAY REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/hospital_final_jimenez/vistas/pacientes/buscar.php" class="btn btn-info w-100">Volver a la busqueda</a>
            </div>
        </div>
    </div>
