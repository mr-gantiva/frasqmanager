<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\ConnectionInterface;

class TestController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $query = $this->db->query('SELECT * FROM usuarios');
        $result = $query->getResult();

        print_r($result);
    }
}
