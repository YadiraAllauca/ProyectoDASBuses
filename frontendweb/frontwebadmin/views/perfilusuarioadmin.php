<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="p-3">
            <h3 class="text-center">
                User Profile
            </h3>

            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="img/cambiarUsuario.png" alt="Profile Picture" style="max-width: 200px;">
                    <a href="#">
                        <i class="fas fa-camera"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-3">
                <p class="fw-bold fs-4 mb-1">Nombres y Apellidos
                    <a href="#">
                        <img class="iconos" src="img/editar.png" alt="Edit Profile" />
                    </a>
                </p>

                <p class="fs-5 text-secondary">Nombre y Apellido</p>
            </div>

            <div class="text-center mt-3">
                <div class="border rounded p-3 d-flex flex-column">
                    <button class="btn btn-outline-secondary mb-2 border-0 shadow-none" href="redireccionadmin.php?action=cooperativas">Edit Info Profile</button>
                    <button class="btn btn-outline-secondary border-0 shadow-none">Change Password</button>
                </div>
            </div>
        </div>
    </div>
</body>
