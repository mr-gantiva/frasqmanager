<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<h1>Crear Producto</h1>

<?php if (session('errors')): ?>
    <div style="color: red;">
        <?php foreach (session('errors') as $error): ?>
            <?= $error ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<div class="col-12 col-md-6">
    <form action="<?= base_url('productos/guardar') ?>" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>

        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea name="descripcion" class="form-control" id="descripcion" required></textarea>
        <br>

        <label for="precio" class="form-label">Precio:</label>
        <input type="number" class="form-control" step="0.01" name="precio" id="precio" required>
        <br>

        <label for="stock" class="form-label">Stock:</label>
        <input type="number" class="form-control" name="stock" id="stock" required>
        <br>

        <label for="imagen" class="form-label">URL de la Imagen:</label>
        <input type="url" class="form-control" name="imagen" id="imagen" placeholder="https://ejemplo.com/imagen.jpg">
        <br>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
<?= $this->endSection() ?>