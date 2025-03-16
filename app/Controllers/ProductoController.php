<?php

namespace App\Controllers;

use App\Models\ProductoModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductoController extends BaseController
{
    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    // Listar todos los productos
    public function index()
    {
        $data['productos'] = $this->productoModel->findAll();
        return view('productos/index', $data);
    }

    // Mostrar el formulario para crear un nuevo producto
    public function crear()
    {
        return view('productos/crear');
    }

    // Guardar un nuevo producto
    public function guardar()
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'imagen' => 'permit_empty|valid_url',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }


        $this->productoModel->save([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'imagen' => $this->request->getPost('imagen'),
        ]);
        return redirect()->to('/productos')->with('mensaje', 'Producto creado exitosamente.');
    }

    // Mostrar el formulario para editar un producto
    public function editar($id)
    {
        $data['producto'] = $this->productoModel->find($id);
        return view('productos/editar', $data);
    }

    // Actualizar un producto
    public function actualizar($id)
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'imagen' => 'permit_empty|valid_url',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->productoModel->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'imagen' => $this->request->getPost('imagen'),
        ]);

        return redirect()->to('/productos')->with('message', 'Producto actualizado exitosamente.');
    }

    // Eliminar un producto
    public function eliminar($id)
    {
        $this->productoModel->delete($id);
        return redirect()->to('/productos')->with('message', 'Producto eliminado exitosamente.');
    }
}
