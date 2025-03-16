<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<h1 class="text-center">Bienvenido, <?= session('username') ?></h1>
<p class="text-center">Rol: <?= session('role') ?></p>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gestión de Productos</h5>
                <p class="card-text">Administra los productos de tu inventario.</p>
                <a href="<?= base_url('productos') ?>" class="btn btn-primary">Ir a Productos</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gestión de Ventas</h5>
                <p class="card-text">Registra y consulta las ventas realizadas.</p>
                <a href="<?= base_url('ventas') ?>" class="btn btn-success">Ir a Ventas</a>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <a href="<?= base_url('/login') ?>" class="btn btn-danger">Cerrar Sesión</a>
</div>
<?= $this->endSection() ?>