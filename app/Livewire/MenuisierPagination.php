<?php

namespace App\Livewire;

use App\Service\MenuisierService;
use Livewire\Component;
use Livewire\WithPagination;

class MenuisierPagination extends Component
{
    use WithPagination;
    public $search = '';
    private $menuisierServiceData;

    public function render(MenuisierService $menuisierServiceData)
    {
        $this->menuisierServiceData = $menuisierServiceData;
        $userdata = $this->menuisierServiceData->search($this->search);
        return view('livewire.menuisier-pagination',["userdata"=>$userdata]);
    }
}
