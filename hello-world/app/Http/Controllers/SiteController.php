<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $mostrarRodape = true;
        return view('home', ['mostrarRodape' => $mostrarRodape]);
    }

    public function services() 
    {
        $titulo = 'Meu site - Serviços - ' . rand(0,10);
        
        $services = [
            ['name' => 'Serviço 01', 'description' => 'Descrição do serviço 01'],
            ['name' => 'Serviço 02', 'description' => 'Descrição do serviço 02'],
            ['name' => 'Serviço 03', 'description' => 'Descrição do serviço 03'],
            ['name' => 'Serviço 04', 'description' => 'Descrição do serviço 04'],
        ];

        $repeticoes = 3;

        return view('services', ['titulo' => $titulo, 'services' => $services, 'repeticoes' => $repeticoes]);
    }

    public function contact() 
    {
        $dataAtual = \date('d/m/Y');
        
        return view('contact', ['dataAtual' => $dataAtual]);
    }
}
