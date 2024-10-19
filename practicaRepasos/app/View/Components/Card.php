<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $titulo;
    public $contenido;
    public $boton;

    public function __construct($titulo,$contenido,$boton)
    {
        
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->boton = $boton;

    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
