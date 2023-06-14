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
                <span class="cooperative-info-title">COOPERATIVE INFO!</span>
            </h3>
            <form style="max-width: 400px; margin: 0 auto;">
                <div class="row mb-3">
                    <label for="firstName" class="col-sm-4 col-form-label">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Enter your first name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="secondName" class="col-sm-4 col-form-label">Second Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="secondName" placeholder="Enter your second name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lastName" class="col-sm-4 col-form-label">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="lastName" placeholder="Enter your last name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="motherLastName" class="col-sm-4 col-form-label">Mother's Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="motherLastName" placeholder="Enter your mother's last name" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="identificationCard" class="col-sm-4 col-form-label">Identification Card Number:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="identificationCard" placeholder="Enter your identification card number" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter your email" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="phone" class="col-sm-4 col-form-label">Phone:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="phone" placeholder="Enter your phone number" style="height: auto; padding: 0.375rem 0.75rem; font-size: 0.875rem;">
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
