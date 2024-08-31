<?php

namespace App\Livewire;

use App\Service\ElectricienService;
use Livewire\Component;
use Livewire\WithPagination;

class ElectricienPagination extends Component
{

    use WithPagination;

    private $electricienServiceData;
    public $search = '';

    public function render(ElectricienService  $electricienServiceData)
    {
        $this->electricienServiceData = $electricienServiceData;
        $userdata = $this->electricienServiceData->search($this->search);
        return view('livewire.electricien-pagination',["userdata"=>$userdata]);
    }
    
}
