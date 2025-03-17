<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'ERP FrasqManager' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/public/css/' . ($css ?? 'styles.css')) ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/public/css/styles.css') ?>">
</head>

<body class="container-fluid p-0">
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/dashboard') ?>" data-aos="fade-up"><img src="https://elfrasquerio.com/wp-content/uploads/2024/04/cropped-frasquerio-logo-png-white-768x612-1.webp" alt="" class="w-100 logo__navbar"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-aos="fade-up">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" data-aos="fade-up">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('productos') ?>">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('ventas') ?>">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/login') ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">