<body>

    <div class="indexStyleTitulo">
        <br>
        <p class="tituloBienvenida">Welcome to <img class="iconos" src="img/safey.jpg">Plataform</p>
        <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
            <h3 style="font-size: 20px;">
                <span style="display: inline-block; vertical-align: middle;">New cooperative</span>
                <a href="redireccionadmin.php?action=cooperativasform">
                    <img class="iconos" src="img/mas.png">
                </a>
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

                    <?php
                    $url = 'https://nilotic-quart.000webhostapp.com/listarCooperativas.php';

                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $response = curl_exec($ch);

                    if ($response !== false) {
                        $data = json_decode($response, true);

                        if (!empty($data)) {
                            foreach ($data as $cooperativa) {
                                echo '<tr>';
                                echo '<td>' . $cooperativa['nombre_cooperativa'] . '</td>';
                                echo '<td>' . $cooperativa['cantidad_buses'] . '</td>';
                                echo '<td>';
                                echo '<img class="iconos" src="img/frecuencias.png">';
                                echo '<img class="iconos" src="img/editar.png">';
                                echo '<img class="iconos" src="img/borrar.png">';
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="3">No se encontraron registros en la tabla</td></tr>';
                        }
                    } else {
                        echo '<tr><td colspan="3">Error al obtener los datos</td></tr>';
                    }

                    curl_close($ch);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>