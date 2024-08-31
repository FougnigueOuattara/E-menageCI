<?php

namespace App\Livewire;

use App\Service\PeintreService;
use Livewire\Component;
use Livewire\WithPagination;

class PeintrePagination extends Component
{
    use WithPagination;

    public $search = '';
    private $peintreServiceData;

    public function render(PeintreService $peintreServiceData)
    {
        $this->peintreServiceData = $peintreServiceData;
        $userdata = $this->peintreServiceData->search($this->search);

        // Pass the userdata to the view
        return view('livewire.user-pagination', ['userdata' => $userdata]);
    }
}
