<?php

namespace App\Http\Controllers;

use App\Service\PeintreService;
use Illuminate\Http\Request;

class PeintreController extends Controller
{
    //
    private $peintreServiceData;

    public function __construct(PeintreService $peintreServiceData)
    {
        $this->peintreServiceData = $peintreServiceData;
    }

    public function index()
    {
        $data = $this->peintreServiceData->getPeintre();

        return view('personnels_batiment.peintre',['peintres' => $data ]); 
    } 

    public function search()
    {
        $data = $this->peintreServiceData->search();
        return view('personnels_batiment.peintre',['peintres' => $data ]);
    }
}
