<?php

namespace App\Livewire;

use App\Service\NounouService;
use Livewire\Component;
use Livewire\WithPagination;

class NounouPagination extends Component
{
    use WithPagination;

    public $search = '';
    private $nounouServiceData;

    public function render(NounouService $nounouServiceData)
    {
        $this->nounouServiceData = $nounouServiceData;
        $userdata = $this->nounouServiceData->search($this->search);
        return view('livewire.nounou-pagination',["userdata"=>$userdata]);
    }
}
