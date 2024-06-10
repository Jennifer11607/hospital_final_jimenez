<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container mt-5">
        <h1 class="text-center" style="font-family:'Courier New', Courier, monospace">BUSCAR CLINICA</h1>
        <div class="row justify-content-center">
            <form action="/hospital_final_jimenez/controladores/clinicas/buscar.php" method="GET" class="col-lg-8 border p-3 w-50" style="font-family:'Courier New', Courier, monospace; background-color: #B0BEC5">
                <div class="row mb-3 ">
                    <div class="col">
                        <label for="espec_nombre">Clinica</label>
                        <input type="text" name="clinica_nombre" id="clinica_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-info w-50">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>