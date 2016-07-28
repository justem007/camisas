<?php

namespace Camisa\Http\Controllers;

use Illuminate\Http\Request;

use Camisa\Http\Requests;

class PaginasController extends Controller
{

    public function main()
    {
        $route = 'layouts.main';
        return view($route);
    }

    public function contatos()
    {

    }

    public function categorias()
    {
        $route = 'paginas.categorias';
        return view($route);
    }

    public function camisas()
    {

    }

    public function tecidos()
    {

    }

    public function servicos()
    {

    }

    public function silkDigital()
    {

    }

    public function videos()
    {

    }

    public function agendarVisita()
    {

    }

    public function empresa()
    {

    }

    public function faqs()
    {

    }

    public function exemplo()
    {
        $route = 'layouts.exemplo';
        return view($route);
    }
}
