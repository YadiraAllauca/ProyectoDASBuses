<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCS - Register</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bodyBack">
<div class="divFormulario">
        <form class="formularioLogin" method="POST">
            <div class="divTituloLogin">
                <h4>Bus Info</h4>
            </div>
            <div class="mb-3">
                <label for="cultivo" class="form-label" style="font-weight:bold;">Cooperative</label>
                <input type="text" class="form-control" name="cultivo" id="cultivo" placeholder="Type the cooperative" required>
            </div>
            <div class="mb-3">
                <label for="min_temp" class="form-label" style="font-weight:bold;">Bus Plate Number</label>
                <input type="text" class="form-control" name="min_temp" id="min_temp" placeholder="Ingrese la temperatura minima del cultivo" required>
            </div>
            <div class="mb-3">
                <label for="max_temp" class="form-label" style="font-weight:bold;">Number of seats</label>
                <input type="text" class="form-control" name="max_temp" id="max_temp" placeholder="Ingrese la temperatura maxima del cultivo" required>
            </div>
            <div class="mb-3">
                <label for="min_hum" class="form-label" style="font-weight:bold;">Bus Register Number</label>
                <input type="text" class="form-control" name="min_hum" id="min_hum" placeholder="Ingrese la humedad minima del cultivo" required>
            </div>
            <div class="mb-3">
                <label for="max_hum" class="form-label" style="font-weight:bold;">Chasis Number</label>
                <input type="text" class="form-control" name="max_hum" id="max_hum" placeholder="Ingrese la humedad maxima dek cultivo" required>
            </div>
            <div class="mb-3">
                <label for="creador" class="form-label" style="font-weight:bold;">Frequency</label>
                <input type="text" class="form-control" name="creador" id="creador" >
            </div>
            
            <div class="botonForm">
                <button type="submit" class="form-control" id="envio" name="envio" style="background-color:green; color:white">Registrar</button>
            </div>
        </form>
    </div>
    
</body>
</html>