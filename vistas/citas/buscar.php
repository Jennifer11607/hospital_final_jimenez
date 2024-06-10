<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once '../../modelos/Especialidades.php';
require_once '../../modelos/Clinica.php';
require_once '../../modelos/Medico.php';
try {
    $especialidad = new Especialidad();
    $clinica = new Clinica();
    $especialidades = $especialidad->buscar();
    $clinicas = $clinica->buscar();

    $medico = new medico();
    $medicos =$medico->buscar();



} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}

?>


<?php include_once '../../includes/header.php' ?>
<?php include_once '../../includes/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Buscar Citas</h1>
    <div class="row justify-content-center">
        <form action="/hospital_final_jimenez/controladores/citas/buscar.php" method="POST" class="col-lg-8 border bg-light p-3">

            <div class="row mb-3">
                <div class="col">
                    <label for="cita_medico">Medico</label>
                    <select name="cita_medico" id="cita_medico" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($medicos as $key => $medico) : ?>
                            <option value="<?= $medico['MEDICO_ID'] ?>"><?= $medico['MEDICO_NOMBRE'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="cita_fecha">Fecha de la Cita</label>
                    <input type="date"  name="cita_fecha" id="cita_fecha" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-info w-100">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once '../../includes/footer.php' ?>