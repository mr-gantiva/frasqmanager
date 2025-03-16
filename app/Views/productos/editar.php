<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>

    <?php if (session('errors')): ?>
        <div style="color: red;">
            <?php foreach (session('errors') as $error): ?>
                <?= $error ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('productos/actualizar/' . $producto['id']) ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= $producto['nombre'] ?>" required>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required><?= $producto['descripcion'] ?></textarea>
        <br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" value="<?= $producto['precio'] ?>" required>
        <br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="<?= $producto['stock'] ?>" required>
        <br>

        <label for="imagen">URL de la Imagen:</label>
        <input type="url" name="imagen" id="imagen" value="<?= $producto['imagen'] ?>" placeholder="https://ejemplo.com/imagen.jpg">
        <br>

        <?php if ($producto['imagen']): ?>
            <img src="<?= $producto['imagen'] ?>" alt="Imagen del producto" width="100">
        <?php endif; ?>

        <button type="submit">Actualizar</button>
    </form>
</body>

</html>