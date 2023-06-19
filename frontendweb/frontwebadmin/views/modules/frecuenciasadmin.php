<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Realizar la solicitud AJAX al servicio
            $.ajax({
                url: 'https://nilotic-quart.000webhostapp.com/listarFrecuencias.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Manipular los datos y agregarlos al combobox de origen
                    var origenSelect = $('#origin');
                    $.each(data, function(index, item) {
                        var option = $('<option>').val(item.origen_frecuencia).text(item.origen_frecuencia);
                        origenSelect.append(option);
                    });

                    // Manipular los datos y agregarlos al combobox de destino
                    var destinoSelect = $('#destination');
                    $.each(data, function(index, item) {
                        var option = $('<option>').val(item.destino_frecuencia).text(item.destino_frecuencia);
                        destinoSelect.append(option);
                    });
                },
                error: function() {
                    console.log('Error al cargar los datos');
                }
            });

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
                <span class="cooperative-info-title">INFORMACIÓN DE LA FRECUENCIA</span></span>
            </h3>
            <form style="max-width: 400px; margin: 0 auto;">
                <div class="row mb-3">
                    <label for="origin" class="col-sm-4 col-form-label">Origen:</label>
                    <div class="col-sm-8">
                        <select class="form-control form-control-sm" id="origin" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                            <option value="">Escoja una opción</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="destination" class="col-sm-4 col-form-label">Destino:</label>
                    <div class="col-sm-8">
                        <select class="form-control form-control-sm" id="destination" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                            <option value="">Escoja una opción</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cost" class="col-sm-4 col-form-label">Costo:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="cost" placeholder="Ingrese el costo" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="duration" class="col-sm-4 col-form-label">Duración:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="duration" placeholder="Ingrese la duración" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" style="width: 45%;">Guardar</button>
                    <button type="button" class="btn btn-outline-primary" style="width: 45%;">Cancelar</button>
                </div>
            </form>
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
                    <p class="mt-3">Guardado Exitosamente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</body>