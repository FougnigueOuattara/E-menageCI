<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\VitrierService;

class VitrierController extends Controller
{
    //We injecte Vitrier service in this controller

    private $vitrierServiceData;

    public function __construct(VitrierService $vitrierServiceData)
    {
        $this->vitrierServiceData = $vitrierServiceData;
    }

    // Display vitriers

    public function index()
    {

        $user_data = $this->vitrierServiceData->getVitrier();

        return view('personnels_batiment.vitrier',[
            'user_data' => $user_data
            ]); 
    }
}
