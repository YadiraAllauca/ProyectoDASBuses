<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFEY!- Login</title>
    <link rel="stylesheet" href="../../bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styles.css">

</head>

<body class="bodyBack">
    
    <header class="headerStyle">
        <div style=" display: flex; justify-content: space-between;">
            <img class="avatar" src="../../img/safey.png">
            <button type="button" class="btn buttonStyle" id="btnLogin">Login</button>
        </div>
        <nav class="navbar-expand-lg navbar-dark menuStyle custom-nav">>
            <div class="container-fluid">
                <a class="navbar-brand" href="redireccion.php?action=home">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="redireccion.php?action=invernaderos">Cooperatives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="redireccion.php?action=registrarinvernadero" style="margin-right: 20px;">Frequencies</a>
                        </li>
                    </ul>
                </a>
            </div>
        </nav>
        
    </header>
    <div class="indexStyleTitulo"> 
    <br><br><br><br>    
    <p class="bienvenida">Welcome to <img class="avatar" src="../../img/safey.png"></p>
    <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
    <h3 style="font-size: 20px;">
        <span style="display: inline-block; vertical-align: middle;">New cooperative</span>
        <img class="iconomas" src="../../img/mas.png">
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Cooperatives</th>
                <th scope="col">Number of buses</th>
                <th scope="col">Actions</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                <img class="iconomas" src="../../img/editar.png">
                <img class="iconomas" src="../../img/borrar.png">

                </td>
                
            </tr>
        </tbody>
    </table>
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
</body>

</html>