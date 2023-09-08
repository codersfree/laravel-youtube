<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenido a la página principal de cursos";
    }

    public function create()
    {
        return "En esta página podrás crear un curso";
    }

    public function show($curso)
    {
        return "Bienvenido al curso de $curso";
    }
}
