<?php

namespace App\Livewire;

use App\Service\MenagerService;
use Livewire\Component;
use Livewire\WithPagination;

class MenagerPagination extends Component

{    use WithPagination;

    private $menagerServiceData;
    public $search = '';

    public function render(MenagerService $menagerServiceData)

    {  $this->menagerServiceData = $menagerServiceData;
        $userdata = $this->menagerServiceData->search($this->search);
        return view('livewire.menager-pagination',["userdata"=>$userdata]);
    }
}
