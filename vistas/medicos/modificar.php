<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once '../../includes/header.php'; 
include_once '../../includes/navbar.php';

require '../../modelos/Medico.php';
require '../../modelos/Especialidades.php';
require '../../modelos/Clinica.php';

try {
    if (isset($_GET['medico_id']) && $_GET['medico_id'] != '') {
        $medico = new Medico(['medico_id' => $_GET['medico_id']]);
        $medicos = $medico->buscar();

        $especialidad = new Especialidad();
        $clinica = new Clinica();
        $especialidades = $especialidad->buscar();
        $clinicas = $clinica->buscar();
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>


<div class="container full-height d-flex justify-content-center align-items-center mt-5">
        <div class="w-100">
            <h1 class="text-center mb-4" style="font-family:'Courier New', Courier, monospace">Modificar Médicos</h1>
            <div class="row justify-content-center">
                <form action="/hospital_final_jimenez/controladores/medicos/modificar.php" method="POST" class="col-lg-6 border p-4 rounded" style="font-family:'Courier New', Courier, monospace; background-color: #F1948A ">
                    <input type="hidden" name="medico_id" value="<?= $medicos[0]['MEDICO_ID'] ?>">
                    <div class="form-group mb-3">
                        <label for="medico_nombre">Nombre del Médico</label>
                        <input type="text" name="medico_nombre" id="medico_nombre" value="<?= $medicos[0]['MEDICO_NOMBRE'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="medico_espec">Especialidad</label>
                        <select name="medico_espec" id="medico_espec" class="form-control" required>
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($especialidades as $especialidad) : ?>
                                <option value="<?= $especialidad['ESPEC_ID'] ?>" <?= $medicos[0]['MEDICO_ESPEC'] == $especialidad['ESPEC_ID'] ? 'selected' : '' ?>><?= $especialidad['ESPEC_NOMBRE'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="medico_clinica">Clínica</label>
                        <select name="medico_clinica" id="medico_clinica" class="form-control" required>
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($clinicas as $clinica) : ?>
                                <option value="<?= $clinica['CLINICA_ID'] ?>" <?= $medicos[0]['MEDICO_CLINICA'] == $clinica['CLINICA_ID'] ? 'selected' : '' ?>><?= $clinica['CLINICA_NOMBRE'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-warning btn-sm px-4">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include_once '../../includes/footer.php' ?>
