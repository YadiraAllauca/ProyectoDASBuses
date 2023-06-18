<body>
    <div class="indexStyleTitulo">
        <br><br><br>
        <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
            <h3 style="font-size: 20px;">
                <span style="display: inline-block; vertical-align: middle;">Nueva Frecuencia</span>
                <a href="redireccionadmin.php?action=frecuenciasform">
                    <img class="iconos" src="img/mas.png">
                </a>
            </h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Origen</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Acciones </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $url = 'https://nilotic-quart.000webhostapp.com/listarFrecuencias.php';

                        $ch = curl_init($url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $response = curl_exec($ch);

                        if ($response !== false) {
                            $data = json_decode($response, true);

                            if (!empty($data)) {
                            foreach ($data as $frecuencia) {
                                echo '<tr>';
                                echo '<td>' . $frecuencia['origen_frecuencia'] . '</td>';
                                echo '<td>' . $frecuencia['destino_frecuencia'] . '</td>';
                                echo '<td>' . $frecuencia['costo_frecuencia'] . '</td>';
                                echo '<td>' . $frecuencia['duracion_frecuencia'] . '</td>';
                                echo '<td>';
                                echo '<img class="iconos" src="img/editar.png">';
                                //echo '<img class="iconos" src="img/editar.png" onclick="editFrecuencia(\'' . $frecuencia['id_frecuencia'] . '\', \'' . $frecuencia['origen_frecuencia'] . '\', \'' . $frecuencia['destino_frecuencia'] . '\', \'' . $frecuencia['costo_frecuencia'] . '\', \'' . $frecuencia['duracion_buses'] . '\')">';
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