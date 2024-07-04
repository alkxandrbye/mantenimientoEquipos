<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento equipos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d9bdac89ec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        include '../conexion.php';
        $conexion = conexion();

        $ssql = "select * from monitor";

        $result = $conexion->query($ssql);
    ?>
    <div class="wrapper">
    <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Mantenimiento Equipos</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Gestion
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#equipo" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Equipo
                        </a>
                        <ul id="equipo" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../crudEquipo/registrarEquipo.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../crudEquipo/listaEquipos.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#marca" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Marca
                        </a>
                        <ul id="marca" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../crudMarca/registrarMarca.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../crudMarca/listaMarcas.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#mantenimiento" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Mantenimiento
                        </a>
                        <ul id="mantenimiento" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../crudMantenimiento/registrarMantenimiento.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../crudMantenimiento/listaMantenimientos.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#monitor" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Monitor
                        </a>
                        <ul id="monitor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="registrarMonitor.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="listaMonitores.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#sala" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Sala
                        </a>
                        <ul id="sala" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../crudSala/registrarSala.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../crudSala/listaSalas.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#sede" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Sede
                        </a>
                        <ul id="sede" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../crudSede/registrarSede.html" class="sidebar-link">Registrar</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../crudSede/listaSedes.php" class="sidebar-link">Consultar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-light">
                <button class="btn" id="sidebar-toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="container d-flex justify-content-center align-items-center">
                <main class="content px-3 py-2 w-75 h-75">
                    <div class="mb-3">
                    <h2>Lista de Equipos</h2>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombre</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $result->fetch_array()) {
                                    echo '<tr><td>' . $row["codMonitor"] . '</td>';
                                    echo '<td>' . $row["nombreMonitor"] .'</td>';
                                    echo '<td> <button type="button" class="btn btn-primary btn-sm" onclick="abrirModalActualizar('.$row["codMonitor"].', \''.$row["nombreMonitor"].'\')">Editar</button></td>
                                    <td> <a href="#" onclick="confirmarEliminar('.$row["codMonitor"].')" class="btn btn-danger btn-sm">Eliminar</td>
                                    </tr>';
                                }
                                $result->free_result();
                                $conexion->close();
                            ?>
                        </tbody>
                    </table>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <div id="modalActualizar" class="modal fade" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalActualizarLabel">Actualizar monitor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formActualizar" method="POST" action="updateMonitor.php">
                        <div class="mb-3">
                            <label for="nombreMonitor" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreMonitor" name="nombreMonitor">
                        </div>
                        <div class="mb-3">
                            <label for="codMonitor" class="form-label">Identificación</label>
                            <input type="text" class="form-control" id="codMonitor" name="codMonitor" readonly>
                        </div>
                        <button onclick="actualizar(document.getElementById('codMonitor').value)" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        function confirmarEliminar(id) {
            if (confirm("¿Estás seguro de que quieres eliminar este monitor?")) {
                fetch('deleteMonitor.php?id=' + id)
                    .then(response => response.text())
                    .then(result => {
                        if (result === "exito") {
                            alert("Registro eliminado correctamente");
                            window.location.reload(); // recargar la página después de eliminar
                        } else {
                            alert("Error al eliminar: " + result);
                        }
                    });
            }
        }
        function abrirModalActualizar(id, nombre) {
            document.getElementById('codMonitor').value = id;
            document.getElementById('nombreMonitor').value = nombre;
            var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
            modal.show();
        }
        function actualizar(id) {
        // Obtener el nombre del monitor
        var nombre = document.getElementById('nombreMonitor').value;

        // Crear un objeto FormData con los datos a enviar
        var formData = new FormData();
        formData.append('codMonitor', id);
        formData.append('nombreMonitor', nombre);

        // Realizar la solicitud POST al servidor
        fetch('updateMonitor.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            if (result === "exito") {
                alert("Registro actualizado correctamente");
                window.location.reload();
            } else {
                alert("Error al actualizar: " + result);
            }
        });
}

    </script>
</body>
</html>