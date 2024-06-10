<?php
//  ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);

include_once '../../includes/header.php';
include_once '../../includes/navbar.php';
require_once '../../modelos/Cita.php';


$_POST['cita_medico'] = htmlspecialchars($_POST['cita_medico']);
// $_POST['cita_fecha'] = date("Y-m-d", strtotime($_POST['cita_fecha']));


try {
    $cita = new Cita($_POST);
    $citas = $cita->mostrarInformacion();



//     $cita3 = new Cita();
// $cit=$cita3->buscar_todo();
// // var_dump($cit);

//     $paciente = new Paciente();
//     $pacientes = $paciente->buscar();
//     // var_dump($pacientes);
//     $medico = new Medico();
//     $medicos = $medico->buscar();

} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}

?>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center" style="font-family:'Courier New', Courier, monospace">TABLA DE CITAS</h1>
            <div class="col-lg-8">
                <table class="table table-bordered table-hover" style="font-family:'Courier New', Courier, monospace">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>PACIENTE</th>
                            <th>DPI</th>
                            <th>TELÉFONO</th>
                            <th>MÉDICO</th>
                            <th>FECHA CITA</th>
                            <th>HORA</th>
                            <th>REFERIDO</th>
                            <th>DETALLE</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($citas) > 0) : ?>
                            <?php foreach ($citas as $key => $cita) : ?>
                                <?php
                                ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $cita['PACIENTE_NOMBRE'] ?? '' ?></td>
                                    <td><?= $cita['PACIENTE_DPI'] ?? '' ?></td>
                                    <td><?= $cita['PACIENTE_TELEFONO'] ?? '' ?></td>
                                    <td><?= $cita['MEDICO_NOMBRE'] ?? '' ?></td>
                                    <td><?= $cita['CITA_FECHA'] ?></td>
                                    <td><?= $cita['CITA_HORA'] ?></td>
                                    <td><?= $cita['CITA_REFERENCIA'] ?></td>
                                    <td><a class="btn btn-primary w-100" href="/hospital_final_jimenez/vistas/citas/detalle.php?cita_fecha=<?= $cita['CITA_FECHA'] ?>">DETALLE</a></td>
                                    <td><a class="btn btn-danger w-100" href="/hospital_final_jimenez/controladores/citas/eliminar.php?cita_id=<?= $cita['CITA_ID'] ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="10">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center" >
                <a href="/hospital_final_jimenez/vistas/citas/buscar.php" class="btn btn-info w-50 mb-5">Volver a la búsqueda</a>
            </div>
        </div>
    </div>

    <?php include_once '../../includes/footer.php'?>