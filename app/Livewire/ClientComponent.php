<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientComponent extends Component
{
    public $clients;
    public $client_id;
    public $name;
    public $rut;
    public $birth_date;
    public $status;
    public $email;
    public $phone;
    public $address;
    public $tenant_id = 1;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'rut' => 'required|string|max:50|unique:rut',
        'birth_date' => 'nullable|date',
        'email' => 'required|email|unique:email',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string',
    ];
    protected $messages = [
        'name.required' => 'El campo Nombre es obligatorio.',
        'name.max' => 'El campo Nombre no puede exceder de 255 caracteres.',
        'rut.required' => 'El campo RUT es obligatorio.',
        'rut.max' => 'El RUT no puede exceder de 50 caracteres.',
        'rut.unique' => 'Este RUT ya está registrado.',
        'birth_date.date' => 'La fecha de nacimiento debe ser una fecha válida.',
        'email.email' => 'El campo Email debe ser una dirección de correo válida.',
        'email.unique' => 'Este correo ya está registrado.',
        'email.required' => 'El campo EMAIL es obligatorio.',
        'phone.required' => 'El campo TELEFONO es obligatorio.',
        'phone.max' => 'El campo Teléfono no puede exceder de 20 caracteres.',
        'address.max' => 'El campo Dirección no puede exceder de 100 caracteres.',
    ];
    public function render()
    {
        $this->clients = Client::all();
        return view('livewire.client-component');
    }

    public function resetForm()
    {
        $this->reset(['client_id', 'name', 'rut', 'birth_date', 'status', 'email', 'phone', 'address', 'isEditing']);
    }

    public function Add()
    {
        $this->resetValidation(); // Elimina mensajes de validación anteriores
        $this->resetExcept('client'); // Resetea propiedades excepto 'client'
        
        $this->dispatch('init-new'); // Emite un evento, si necesitas hacer algo más en la vista
    }

    public function Store(Request $request)
    {

        
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'rut' => 'required|string|max:50|unique:clients,rut',
        //     'birth_date' => 'nullable|date',
        //     'email' => 'nullable|email|unique:clients,email',
        //     'phone' => 'nullable|string|max:20',
        //     'address' => 'nullable|string|max:255',
        // ], [
        //     'name.required' => 'El campo Nombre es obligatorio.',
        //     'name.max' => 'El campo Nombre no puede exceder de 255 caracteres.',
        //     'rut.required' => 'El campo RUT es obligatorio.',
        //     'rut.max' => 'El RUT no puede exceder de 50 caracteres.',
        //     'rut.unique' => 'Este RUT ya está registrado.',
        //     'birth_date.date' => 'La fecha de nacimiento debe ser una fecha válida.',
        //     'email.email' => 'El campo Email debe ser una dirección de correo válida.',
        //     'email.unique' => 'Este correo ya está registrado.',
        //     'phone.max' => 'El campo Teléfono no puede exceder de 20 caracteres.',
        //     'address.max' => 'La dirección no puede exceder de 255 caracteres.',
        // ]);
        // dd($request);
        $this->validate();
        Client::create($request->all());

    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $this->client_id = $client->id;
        $this->name = $client->name;
        $this->rut = $client->rut;
        $this->birth_date = $client->birth_date;
        $this->status = $client->status;
        $this->email = $client->email;
        $this->phone = $client->phone;
        $this->address = $client->address;
        $this->isEditing = true;
    }

    public function update()
    {
      

        $client = Client::findOrFail($this->client_id);
        $client->update([
            'name' => $this->name,
            'rut' => $this->rut,
            'birth_date' => $this->birth_date,
            'status' => $this->status,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        session()->flash('message', 'Cliente actualizado exitosamente.');
        $this->resetForm();
    }

    public function delete($id)
    {
        Client::findOrFail($id)->delete();
        session()->flash('message', 'Cliente eliminado exitosamente.');
        $this->resetForm();
    }
}
