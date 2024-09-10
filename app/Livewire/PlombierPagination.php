<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Service\PlombierService;

class PlombierPagination extends Component
{
    use WithPagination;

    private $plomblierServiceData;
    public $search = '';

    public function render(PlombierService  $plomblierServiceData)
    {
        //$user = User::all();
        //$averageRating = $user->averageRating();
        //$averageRating = round($averageRating, 1); // Arrondir à une décimale
        $this->plomblierServiceData = $plomblierServiceData;
        $userdata = $this->plomblierServiceData->search($this->search);
        return view('livewire.plombier-pagination', ["userdata" => $userdata]);
    }
}
