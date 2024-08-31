<?php

namespace App\Livewire;

use App\Service\FerronnierService;
use Livewire\Component;
use Livewire\WithPagination;

class FerronnierPagination extends Component
{
    use WithPagination;

    private $ferronnierServiceData;
    public $search = '';

    public function render(FerronnierService  $ferronnierServiceData)
    {
        $this->ferronnierServiceData = $ferronnierServiceData;
        $userdata = $this->ferronnierServiceData->search($this->search);
        return view('livewire.ferronnier-pagination',["userdata"=>$userdata]);
    }
}
