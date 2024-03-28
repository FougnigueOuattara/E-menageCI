<?php

namespace App\Http\Controllers;

use App\Service\ElectricienService;
use Illuminate\Http\Request;

class ElectricienController extends Controller
{
    private $electricienServiceData;

    public function __construct(ElectricienService $electricienServiceData)
    {
        $this->electricienServiceData = $electricienServiceData;
    }
    
    public function index()
    {
        $data = $this->electricienServiceData->getElectricien();
        
        return view('personnels_batiment.electricien',[
            'electriciens' => $data
        ]);
    }


    public function search()
    {      
        $data = $this->electricienServiceData->search();

        return view('personnels_batiment.electricien',[
            'electriciens' => $data
        ]);
    
    }
}
