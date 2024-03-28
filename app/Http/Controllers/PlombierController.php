<?php

namespace App\Http\Controllers;

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
        $data = $this->plomblierServiceData->getPlombier();
        return view('personnels_batiment.plombier',['plombiers' => $data]);
    }

    public function search()
    {
        $data = $this->plomblierServiceData->search();
        return view('personnels_batiment.plombier',['plombiers' => $data]);
    }
}
