<?php
if (isset($_POST['login'])) {
    header('Location: ' . "login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFEY!- Login</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">


</head>


<body class="bodyBack">
    <header class="headerStyle">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <img src="img/safey.jpg" class="avatar">
                <ul class="navbar-nav">
                    <li class="nav-item">

                    </li>
                </ul>
                <form action="login.php" method="POST">
                    <button type="submit" class="btn btn-danger; buttonStyle" id="login">Log In</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="indexStyle">
        <br><br><br><br>
        <p>Welcome to <img class="avatar" src="img/safey.jpg"></p>

        <p>With safety you can travel safely to all your favorite destinations!</p>
    </div>


    <footer class="footerStyle">
        <p>
            <br>
            <b>______________________________________</b>
            <b>______________________________________</b>
            <br>
            <b>Copyright © 2023 Safey</b>
            <br>
            <b><a href="">Home</a> | <a href="">About</a></b>
        </p>
    </footer>
</body>

</html>