<?php

namespace App\Http\Controllers;

use App\Service\FerronnierService;
use Illuminate\Http\Request;

class FerronnierController extends Controller
{
    //
    private $ferronnierServiceData;

    public function __construct(FerronnierService $ferronnierServiceData)
    {
        $this->ferronnierServiceData = $ferronnierServiceData;
    }

    public function index()
    {
        $user_data = $this->ferronnierServiceData->getFerronnier();
        return view('personnels_batiment.ferronnier',['user_data'=> $user_data]); 
    }
}
