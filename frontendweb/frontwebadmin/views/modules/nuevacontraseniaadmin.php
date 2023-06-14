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
            <button type="button" class="btn buttonStyle" id="btnLogin">Login</button>
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
                <span class="cooperative-info-title">CHANGE PASSWORD!</span>
            </h3>
            <form style="max-width: 400px; margin: 0 auto;">
                <div class="row mb-3">
                    <label for="newPassword" class="col-sm-4 col-form-label">New Password:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="password" class="form-control form-control-sm" id="newPassword" placeholder="Enter new password">
                            <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="newPasswordAgain" class="col-sm-4 col-form-label">New Password Again:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="password" class="form-control form-control-sm" id="newPasswordAgain" placeholder="Enter new password again">
                            <button class="btn btn-outline-secondary" type="button" id="toggleNewPasswordAgain">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="currentPassword" class="col-sm-4 col-form-label">Current Password:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="password" class="form-control form-control-sm" id="currentPassword" placeholder="Enter current password">
                            <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="width: 120px;">Save</button>
                </div>
            </form>

        </div>

    </div>
    
</body>

</html>
