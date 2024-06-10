<?php
//  ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);

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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Buscar citas</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
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
                            <th>MODIFICAR</th>
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
                                    <td><a class="btn btn-warning w-100" href="/hospital_final_jimenez/vistas/citas/detalle.php?cita_fecha=<?= $cita['CITA_FECHA'] ?>">DETALLE</a></td>
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
            <div class="col-lg-4">
                <a href="/hospital_final_jimenez/vistas/citas/buscar.php" class="btn btn-info w-100">Regresar a la búsqueda</a>
            </div>
        </div>
    </div>
</body>
</html>
