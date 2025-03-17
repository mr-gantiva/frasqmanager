<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<!-- <h1 class="text-center" data-aos="fade-up">Iniciar Sesión</h1> -->

<?php if (session('error')): ?>
    <div class="col-12 col-md-6 offset-md-3 alert alert-danger text-center zumbido" role="alert"">
        <?php
        if (is_array(session('error'))) {
            echo implode('<br>', session('error')); // Si es un array, imprimir cada error en una linea
        } else {
            echo session('error'); // Si es una cadena, imprimir directamente
        }
        ?>
    </div>
<?php endif; ?>

<div class=" row">
        <div class="col-12 col-md-6 d-flex align-items-center" data-aos="fade-right">
            <img src="https://elfrasquerio.com/wp-content/uploads/2024/04/cropped-frasquerio-logo-png-white-768x612-1.webp" alt="" class="w-100 logo__login">
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center card__formulario" data-aos="fade-left">
            <div class="p-5">
                <form action="<?= base_url('auth/attemptLogin') ?> " method="post">
                    <h2 class="subtitulo">Login</h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>

                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <br>

                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>


    <?= $this->endSection() ?>