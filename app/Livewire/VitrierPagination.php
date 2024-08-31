<?php

namespace App\Livewire;

use App\Service\VitrierService;
use Livewire\Component;
use Livewire\WithPagination;

class VitrierPagination extends Component
{   
     use WithPagination;

    private $vitrierServiceData;
    public $search = '';

    public function render(VitrierService  $vitrierServiceData)
    {
        $this->vitrierServiceData = $vitrierServiceData;
        $userdata = $this->vitrierServiceData->search($this->search);
        return view('livewire.vitrier-pagination',["userdata"=>$userdata]);
    }
}
