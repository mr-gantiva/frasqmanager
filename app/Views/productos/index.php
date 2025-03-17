<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<h1 class="text-center">Lista de Productos</h1>

<?php if (session('message')): ?>
    <div class="alert alert-success"><?= session('message') ?></div>
<?php endif; ?>

<a href="<?= base_url('productos/crear') ?>" class="btn btn-primary mb-3">Crear Producto</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['id'] ?></td>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['descripcion'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['stock'] ?></td>
                <td>
                    <?php if ($producto['imagen']): ?>
                        <img src="<?= $producto['imagen'] ?>" alt="Imagen del producto" width="50">
                    <?php endif; ?>
                </td>
                <td>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <a class="btn btn-info" href="<?= base_url('productos/editar/' . $producto['id']) ?>">Editar</a>
                        <a class="btn btn-danger" href="<?= base_url('productos/eliminar/' . $producto['id']) ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
<?= $this->endSection() ?>