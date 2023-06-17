<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.1.9/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.1.9/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.1.9/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        event.preventDefault(); // Evitar que se envíe el formulario

        // Mostrar ventana emergente con mensaje y icono
        $('#successModal').modal('show');
      });
    });
  </script>
</head>

<body>
  <div class="indexStyleTitulo">
    <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
      <h3 style="font-size: 20px; text-align: center;">
        <span class="cooperative-info-title">COOPERATIVE INFO!</span>
      </h3>
      <form style="max-width: 400px; margin: 0 auto;" action="https://nilotic-quart.000webhostapp.com/agregarCooperativa.php" method="POST">
        <div class="row mb-3">
          <label for="nombre_cooperativa" class="col-sm-4 col-form-label">Cooperative:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="nombre_cooperativa" name="nombre_cooperativa" placeholder="Enter cooperative name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
          </div>
        </div>
        <div class="row mb-3">
          <label for="ruc_cooperativa" class="col-sm-4 col-form-label">RUC:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="ruc_cooperativa" name="ruc_cooperativa" placeholder="Enter RUC number" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
          </div>
        </div>
        <div class="row mb-3">
          <label for="cantidad_buses" class="col-sm-4 col-form-label">Number of Buses:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <button type="button" class="btn btn-primary" id="decrementBtn"><i class="fas fa-minus"></i></button>
              </div>
              <input type="text" class="form-control form-control-sm small-input" id="cantidad_buses" name="cantidad_buses" placeholder="0" value="0">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="incrementBtn"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="frecuencia" class="col-sm-4 col-form-label">Frequency:</label>
          <div class="col-sm-8">
            <div class="input-group">
              <span class="form-control form-control-sm" style="background-color: #fff; border: none; height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                Add Frequency
              </span>
              <div class="input-group-append">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frequencyModal">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary" style="width: 45%;">Save</button>
          <button type="button" class="btn btn-outline-primary" style="width: 45%;">Cancel</button>
        </div>
      </form>
    </div>

  </div>
  <div class="modal fade" id="frequencyModal" tabindex="-1" aria-labelledby="frequencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="frequencyModalLabel">Add Frequency</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table id="frequencyTable" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Origin</th>
                <th scope="col">Destination</th>
                <th scope="col">Duration</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                  <input type="checkbox">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
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
          <p class="mt-3">Saved successfully</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        event.preventDefault();

        // Obtener los valores de los campos del formulario
        var rucCooperativa = $("#ruc_cooperativa").val();
        var nombreCooperativa = $("#nombre_cooperativa").val();
        var cantidadBuses = $("#cantidad_buses").val();

        // Crear un objeto de datos para enviar al servicio
        var data = {
          ruc_cooperativa: rucCooperativa,
          nombre_cooperativa: nombreCooperativa,
          cantidad_buses: cantidadBuses
        };

        // Realizar la solicitud AJAX al servicio
        $.ajax({
          url: "https://nilotic-quart.000webhostapp.com/agregarCooperativa.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function(response) {
            // La solicitud se realizó con éxito, puedes mostrar un mensaje de éxito aquí si lo deseas
            // Por ejemplo:
            if (response.OK) {
              Swal.fire("Success", "Saved successfully", "success");
            } else {
              Swal.fire("Error", "Failed to save: " + response.errorMsg, "error");
            }
          },
          error: function(xhr, status, error) {
            Swal.fire("Error", "An error occurred: " + error, "error");
          }
        });
      });
    });


    // Obtener el elemento del campo de entrada y los botones de incremento y decremento
    var numBusesInput = document.getElementById('cantidad_buses');
    var incrementBtn = document.getElementById('incrementBtn');
    var decrementBtn = document.getElementById('decrementBtn');

    // Manejar el evento clic del botón de incremento
    incrementBtn.addEventListener('click', function() {
      // Obtener el valor actual del campo de entrada
      var currentValue = parseInt(numBusesInput.value);
      // Incrementar el valor en 1
      var incrementedValue = currentValue + 1;
      // Establecer el nuevo valor en el campo de entrada
      numBusesInput.value = incrementedValue;
    });

    // Manejar el evento clic del botón de decremento
    decrementBtn.addEventListener('click', function() {
      // Obtener el valor actual del campo de entrada
      var currentValue = parseInt(numBusesInput.value);
      // Decrementar el valor en 1 si es mayor que 0
      var decrementedValue = currentValue > 0 ? currentValue - 1 : 0;
      // Establecer el nuevo valor en el campo de entrada
      numBusesInput.value = decrementedValue;
    });
  </script>
</body>