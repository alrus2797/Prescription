<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    public function all()
    {
    	return view('Medicamentos.todos');
    }
}
