<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<h1>Editar Producto</h1>

<?php if (session('errors')): ?>
    <div style="color: red;">
        <?php foreach (session('errors') as $error): ?>
            <?= $error ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('productos/actualizar/' . $producto['id']) ?>" method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto['nombre'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea name="descripcion" class="form-control" id="descripcion" required><?= $producto['descripcion'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio:</label>
        <input type="number" class="form-control" step="0.01" name="precio" id="precio" value="<?= $producto['precio'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" class="form-control" name="stock" id="stock" value="<?= $producto['stock'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="imagen" class="form-label">URL de la Imagen:</label>
        <input type="url" class="form-control" name="imagen" id="imagen" value="<?= $producto['imagen'] ?>" placeholder="https://ejemplo.com/imagen.jpg">
    </div>

    <?php if ($producto['imagen']): ?>
        <img src="<?= $producto['imagen'] ?>" alt="Imagen del producto" width="100">
    <?php endif; ?>

    <button type="submit" class="btn btn-success">Actualizar</button>


    <a href="<?= base_url('productos') ?>" class="btn btn-info" tabindex="-1" role="button" aria-disabled="false">Volver</a>
</form>
<?= $this->endSection() ?>