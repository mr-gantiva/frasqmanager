<?php

namespace App\Middleware;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthMiddleware implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verificar si el usuario esta autenticado
        if (!session()->has('logged_in')) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión para acceder a esta página.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $aarguments = null)
    {
        // No es necesario hacer nada después de la ejecución del controlador
    }
}
