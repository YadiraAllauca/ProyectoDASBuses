<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFEY!- Login</title>
    <link rel="stylesheet" href="../../bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
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

<body class="bodyBack">

    <header class="headerStyle">
        <div style="display: flex; justify-content: space-between;">
            <img class="avatar" src="../../img/safey.png">
            <button type="button" class="btn buttonStyle" id="btnLogin">Log Out</button>
        </div>
        <nav class="navbar-expand-lg navbar-dark menuStyle custom-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="redireccion.php?action=home">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="redireccion.php?action=cooperativas">Cooperatives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="redireccion.php?action=frecuencias"
                                style="margin-right: 20px;">Frequencies</a>
                        </li>
                    </ul>
                </a>
            </div>
        </nav>

    </header>
    <div class="indexStyleTitulo">
        <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
            <h3 style="font-size: 20px; text-align: center;">
                <span class="cooperative-info-title">COOPERATIVE INFO!</span>
            </h3>
            <form style="max-width: 400px; margin: 0 auto;">
                <div class="row mb-3">
                    <label for="cooperative" class="col-sm-4 col-form-label">Cooperative:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="cooperative" placeholder="Enter cooperative name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ruc" class="col-sm-4 col-form-label">RUC:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="ruc" placeholder="Enter RUC number" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="numBuses" class="col-sm-4 col-form-label">Number of Buses:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-primary" id="decrementBtn"><i class="fas fa-minus"></i></button>
                            </div>
                            <input type="text" class="form-control form-control-sm small-input" id="numBuses" placeholder="0" value="0">
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

        
    

    <footer class="footerStyle">
        <p>
            <br>
            <b>______________________________________</b>
            <a href="">
                <img src="../../img/mail.png" class="socialnetwork">
            </a>
            <b>_</b>
            <a href="">
                <img src="../../img/instagram.png" class="socialnetwork">
            </a>
            <b>_</b>
            <a href="">
                <img src="../../img/twitter.png" class="socialnetwork">
            </a>
            <b>_</b>
            <a href="">
                <img src="../../img/facebook.png" class="socialnetwork">
            </a>
            <b>______________________________________</b>
            <br>
            <b>Copyright © 2023 Safey</b>
            <br>
            <b><a href="index.php" style="color:white">Home</a> | <a href="" style="color:white">About</a></b>
        </p>
    </footer>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-check-circle fa-4x text-success"></i>
                    <p class="mt-3">Cooperative saved successfully</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
