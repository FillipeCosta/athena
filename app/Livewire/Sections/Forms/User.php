<?php

namespace App\Livewire\Sections\Forms;

use Livewire\Component;

class User extends Component
{
    #[Validate('required')]
    public $nome;
    #[Validate('required')]
    public $apelido;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $data_nascimento;
    #[Validate('required')]
    public $sexo;
    #[Validate('required')]
    public $cor_raca;
    #[Validate('required')]
    public $nacionalidade;
    #[Validate('required')]
    public $uf_naturalidade;
    #[Validate('required')]
    public $naturalidade;
    #[Validate('required')]
    public $rg_numero;
    #[Validate('required')]
    public $rg_orgao_emissor;
    #[Validate('required')]
    public $rg_uf;
    #[Validate('required')]
    public $rg_data_emissao;
    #[Validate('required')]
    public $cpf;
    #[Validate('required')]
    public $pis_pasep;
    #[Validate('required')]
    public $titulo_eleitoral_numero;
    #[Validate('required')]
    public $zona_eleitoral;
    #[Validate('required')]
    public $secao_eleitoral;
    #[Validate('required')]
    public $estado_civil;
    #[Validate('required')]
    public $nome_conjuge;
    #[Validate('required')]
    public $nome_pai;
    #[Validate('required')]
    public $nome_mae;


    public function store()
    {
        $this->validate();

        Pessoa::create($this->all());

        session()->flash('message', 'Registro realizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.sections.forms.user');
    }
}


