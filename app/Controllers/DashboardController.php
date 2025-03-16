<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        // Verificar si el usuario esta autenticado
        if (!session('logged_in')) {
            return redirect()->to('/login');
        }

        // Mostrar la vista del dashboard
        return view('dashboard');
    }
}
