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
        $user_data = $this->peintreServiceData->getPeintre();

        return view('personnels_batiment.peintre',['user_data' => $user_data ]); 
    } 

}
