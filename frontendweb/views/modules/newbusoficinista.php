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
                <h4>Informacion del nuevo bus</h4>
            </div>
            <div class="mb-3">
                <label for="cooperativa" class="form-label" style="font-weight:bold;">Cooperativa</label>
                <input type="text" class="form-control" name="cooperativa" id="cooperativa" placeholder="Cooperativa"
                    required>
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label" style="font-weight:bold;">Numero de Placa</label>
                <input type="text" class="form-control" name="placa" id="placa" placeholder="Numero de Placa" required>
            </div>
            <div class="mb-3">
                <label for="numeroasientos" class="form-label" style="font-weight:bold;">Numero de asientos</label>
                <input type="number" min="30" class="form-control" value="30" name="numeroasientos" id="numeroasientos"
                    required>
            </div>
            <div class="mb-3">
                <label for="numeroregistro" class="form-label" style="font-weight:bold;">Numero de registro </label>
                <input type="text" class="form-control" name="numeroregistro" id="numeroregistro"
                    placeholder="Numero de Registro" required>
            </div>
            <div class="mb-3">
                <label for="numerochasis" class="form-label" style="font-weight:bold;">Numero de Chasis</label>
                <input type="text" class="form-control" name="numerochasis" id="numerochasis"
                    placeholder="Numero de Chasis" required>
            </div>
            <div class="mb-3">
                <label for="frecuencia" class="form-label" style="font-weight:bold;">Frecuencia</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <span class="form-control form-control-sm" style="background-color: #fff; border: none; height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                      Agregar Frecuencia
                    </span>
                    <div class="input-group-append">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frequencyModal">
                        <i >+</i>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
            <div >
                <button type="submit" class="btn btn-primary" id="envio" name="envio">Registrar</button>
                <button type="button" class="btn btn-outline-primary">Cancelar</button>
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
                <tr><td colspan="5">No se encontraron registros en la tabla</td></tr>
              </tbody>
            </table>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cerrar</button>
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
