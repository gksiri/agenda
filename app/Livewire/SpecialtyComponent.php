<?php

namespace App\Livewire;

use Livewire\Component;

class SpecialtyComponent extends Component
{
    public function render()
    {
        // Verifica la ruta actual y retorna la vista correspondiente
        if (request()->routeIs('specialty.add')) {
            return view('livewire.add-specialty'); // Vista de agregar especialidad
        }

        // De lo contrario, muestra la vista de lista de especialidades
        return view('livewire.specialty-component');
    }
}
