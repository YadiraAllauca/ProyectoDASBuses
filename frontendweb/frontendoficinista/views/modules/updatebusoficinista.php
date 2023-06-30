<?php
$id_bus = $_GET['id_bus'];
$numero_bus = $_GET['numero_bus'];
$placa_bus = $_GET['placa_bus'];
$carroceria_bus = $_GET['carroceria_bus'];
$cantidad_asientos = $_GET['cantidad_asientos'];
$fotografia = $_GET['fotografia'];
$id_socio = $_GET['id_socio'];
$estado = $_GET['estado'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

<body class="bodyBack">
    <div class="divFormulario">
        <form class="formularioLogin" method="POST">
            <div class="divTituloLogin">
                <h4>Actualizacion de datos del bus</h4>
            </div>
            <input type="text" class="form-control" name="id_bus" id="id_bus" value="<?php echo $id_bus ?>" hidden>
            <div class="mb-3">
                <label for="numero_bus" class="form-label" style="font-weight:bold;">Numero Bus</label>
                <input type="text" class="form-control" name="numero_bus" id="numero_bus" placeholder="Numero Bus"
                    value="<?php echo $numero_bus ?>" required>
            </div>
            <div class="mb-3">
                <label for="placa_bus" class="form-label" style="font-weight:bold;">Numero de Placa</label>
                <input type="text" class="form-control" name="placa_bus" id="placa_bus" placeholder="Numero de Placa"
                    value="<?php echo $placa_bus ?>" required>
            </div>
            <div class="mb-3">
                <label for="carroceria_bus" class="form-label" style="font-weight:bold;">Carroceria</label>
                <input type="text" class="form-control" name="carroceria_bus" id="carroceria_bus"
                    placeholder="Carroceria" value="<?php echo $carroceria_bus ?>" required>
            </div>
            <div class="mb-3">
                <label for="placa_bus" class="form-label" style="font-weight:bold;">Numero de Placa</label>
                <input type="text" class="form-control" name="placa_bus" id="placa_bus" placeholder="Numero de Placa"
                    value="<?php echo $placa_bus ?>" required>
            </div>
            <div class="mb-3">
                <label for="cantidad_asientos" class="form-label" style="font-weight:bold;">Numero de asientos</label>
                <input type="number" min="30" class="form-control" value="<?php echo $cantidad_asientos ?>"
                    name="cantidad_asientos" id="cantidad_asientos" required>
            </div>            
            <div class="mb-3">
                <label for="id_socio" class="form-label" style="font-weight:bold;">Socio</label>
                <input type="text" class="form-control" name="id_socio" id="id_socio" value="<?php echo $id_socio ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label" style="font-weight:bold;">Estado</label>
                <select class="form-control" name="estado" id="estado">
                    <option value="1"<?php if ($estado == 1) echo 'selected'?>>Activo</option>
                    <option value="2" <?php if ($estado == 2) echo 'selected'?>>Inactivo</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" id="envio" name="envio">Registrar</button>
                <button type="button" class="btn btn-danger"><a
                        href="redireccionoficinista.php?action=buses">Cancelar</a></button>
            </div>
        </form>
    </div>


    <div class="modal fade" id="frequencyModal" tabindex="-1" aria-labelledby="frequencyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="frequencyModalLabel">Agregar Frecuencia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="myForm" method="POST">
                        <table id="frequencyTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Origen</th>
                                    <th scope="col">Destino</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Duración</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">No se encontraron registros en la tabla</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-outline-primary"
                                data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-check-circle fa-4x text-success"></i>
                    <p class="mt-3">Guardo Exitosamente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

</body>