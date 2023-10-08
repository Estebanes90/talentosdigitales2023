<section class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="registrar_usuario" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
        <div class="d-inline-flex">
            <form class="form-inline" role="buscar">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            </form>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped">        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario'] ?></td>
                        <td><?= $usuario['apellido'] ?></td>
                        <td><?= $usuario['nombre'] ?></td>
                        <td><?= $usuario['usuario'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td>
                            <a href="<?= base_url("/editar_usuario/{$usuario['id_usuario']}") ?>" class="btn btn-warning">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="<?= base_url("/ver_usuario/delete/{$usuario['id_usuario']}") ?>" type="button" class="btn btn-danger eliminar-usuario" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $usuario['id_usuario'] ?>" data-nombre="<?= $usuario['nombre'] ?> <?= $usuario['apellido'] ?>" data-url="<?= base_url("/ver_usuario/delete/{$usuario['id_usuario']}") ?>">    
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <!-- Puedes generar dinámicamente los enlaces de paginación según tu lógica -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"" data-bs-dismiss="modal">Cancelar</button>
            <a href="<?= base_url("/ver_usuario/delete/{$usuario['id_usuario']}") ?>" type="button" class="btn btn-danger" data-userid="<?= $usuario['id_usuario'] ?>">Eliminar</a>
        </div>
        </div>
    </div>
    </div>       
    <!-- Cierra Modal -->    
</section>



