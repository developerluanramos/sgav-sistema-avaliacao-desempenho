<?php

namespace App\Livewire\Components\SelectBoxes;

use App\Models\PostoTrabalho;
use App\Models\Setor;
use App\Repositories\PostoTrabalho\PostoTrabalhoEloquentRepository;
use App\Repositories\Setor\SetorEloquentRepository;
use Livewire\Component;

class EstruturaOrganizacional extends Component
{
    public $components;
    public $postoTrabalhoUuid;
    public $setorUuid;
    public $departamentoUuid;

    public $setores = [];
    public $departamentos = [];

    public $loading = true;


    public function mount($postoTrabalhoUuid = null, $setorUuid = null)
    {
        $this->postoTrabalhoUuid = $postoTrabalhoUuid;
        $this->setorUuid = $setorUuid;
    }

    public function render()
    {
        $postoTrabalhoRepository = new PostoTrabalhoEloquentRepository(new PostoTrabalho());
        return view('livewire.components.select-boxes.estrutura-organizacional', [
            'postosTrabalho' => $postoTrabalhoRepository->all(),
        ]);
    }

    public function clearVars()
    {
        $this->setorUuid = null;
        $this->departamentoUuid = null;
        $this->setores = [];
        $this->departamentos = [];
    }

    public function selecionaPostoTrabalho()
    {
        $this->clearVars();
        if(!empty($this->postoTrabalhoUuid)) {
            $setorRespoitory = new SetorEloquentRepository(new Setor());
            $this->setores = $setorRespoitory->allByPostoTrabalho($this->postoTrabalhoUuid);
        }
    }

    public function selecionaSetor()
    {
        $this->departamentos = [];
        if(!empty($this->setorUuid)) {
            $setorRespoitory = new SetorEloquentRepository(new Setor());
            $this->departamentos = $setorRespoitory->allByPostoTrabalho($this->postoTrabalhoUuid);
        }
    }
}
