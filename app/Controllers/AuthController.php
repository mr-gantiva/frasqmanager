<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function login() //Muestra el formulario de login.
    {
        // Mostrar el formulario de login
        return view('auth/login');
    }

    public function attemptLogin() //Valida las credenciales y crea la sesión del usuario.
    {
        // Validar los datos del formulario
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }


        // Obtener los datos del formulario
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        // Validar las credenciales
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->validarUsuario($username, $password);

        if ($usuario) {
            // Crear la sesión del usuario
            $session = session();
            $session->set([
                'id' => $usuario['id'],
                'username' => $usuario['username'],
                'role' => $usuario['role'],
                'logged_in' => true,
            ]);

            // Redirigir al Dashboard
            return redirect()->to('/dashboard');
        } else {
            // Mostrar error si las credenciales son invalidas
            return redirect()->back()->withInput()->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    public function logout() //Cierra la sesión del usuario.
    {
        // Eliminar la sesión del usuario
        $session = session();
        $session->destroy();

        // Redirigir al login
        return redirect()->to('/login');
    }
}
