<body class="bodyBack">
    <div class="divFormulario">
        <form class="formularioLogin" method="POST">
            <div class="divTituloLogin">
                <h4>Informacion del nuevo bus</h4>
            </div>
            <div class="mb-3">
                <label for="cultivo" class="form-label" style="font-weight:bold;">Cooperativa</label>
                <input type="text" class="form-control" name="cooperativa" id="cooperativa" placeholder="Cooperativa"
                    required>
            </div>
            <div class="mb-3">
                <label for="min_temp" class="form-label" style="font-weight:bold;">Numero de Placa</label>
                <input type="text" class="form-control" name="placa" id="placa" placeholder="Numero de Placa" required>
            </div>
            <div class="mb-3">
                <label for="max_temp" class="form-label" style="font-weight:bold;">Numero de asientos</label>
                <input type="number" min="30" class="form-control" value="30" name="numeroasientos" id="numeroasientos"
                    required>
            </div>
            <div class="mb-3">
                <label for="min_hum" class="form-label" style="font-weight:bold;">Numero de registro </label>
                <input type="text" class="form-control" name="numeroregistro" id="numeroregistro"
                    placeholder="Numero de Registro" required>
            </div>
            <div class="mb-3">
                <label for="max_hum" class="form-label" style="font-weight:bold;">Numero de Chasis</label>
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
                        <i>+</i>
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