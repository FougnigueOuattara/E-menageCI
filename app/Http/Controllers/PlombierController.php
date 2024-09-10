<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\PlombierService;
use Illuminate\Http\Request;

class PlombierController extends Controller
{
    //
    private $plomblierServiceData;

    public function __construct(PlombierService $plomblierServiceData)
    {
        $this->plomblierServiceData = $plomblierServiceData;
    }

    public function index()
    {
        $userdata = $this->plomblierServiceData->getPlombier();
        return view('personnels_batiment.plombier',['userdata' => $userdata]);
    }
}
