<?php

namespace App\Livewire\Sections\Forms;

use App\Models\Estado;
use Livewire\Component;


class Address extends Component
{
    #[Validate('required')]
    public $estado;
    #[Validate('required')]
    public $endereco;
    #[Validate('required')]
    public $bairro;
    #[Validate('required')]
    public $cidade;
    #[Validate('required')]
    public $uf_residencia;
    #[Validate('required')]
    public $cep;
    #[Validate('required')]
    public $telefone_residencial;
    #[Validate('required')]
    public $telefone_celular;
    #[Validate('required')]
    public $telefone_comercial;

    public function store()
    {
        $this->validate();

        // Endereco::create($this->all());

        session()->flash('message', 'Registro realizado com sucesso!');
    }

    public function render()
    {
        $estados = Estado::all();

        return view('livewire.sections.forms.address', compact('estados'));
    }
}
