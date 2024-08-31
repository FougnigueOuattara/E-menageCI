<?php

namespace App\Livewire;

use App\Service\CuisinierService;
use Livewire\Component;
use Livewire\WithPagination;

class CuisinierPagination extends Component
{
    use WithPagination;

    public $search = "";
    private $cuisinierServiceData;

    public function render(CuisinierService $cuisinierServiceData)
    {   
        $this->cuisinierServiceData = $cuisinierServiceData;
        $userdata = $this->cuisinierServiceData->search($this->search);
        return view('livewire.cuisinier-pagination',["userdata"=>$userdata]);
    }
}
