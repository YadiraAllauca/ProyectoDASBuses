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
                <label for="creador" class="form-label" style="font-weight:bold;">Frecuencia</label>
                <input type="text" class="form-control" name="frecuencia" id="frecuencia">
            </div>
            <div >
                <button type="submit" class="form-control buttonStyle" id="envio" name="envio">Registrar</button>
            </div>
        </form>
    </div>

</body>
<br>
<br>
<br>
</html>