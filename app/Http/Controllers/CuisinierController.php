<?php

namespace App\Http\Controllers;

use App\Service\CuisinierService;
use Illuminate\Http\Request;

class CuisinierController extends Controller
{
    //
    private $cuisinierServiceData;

    public function __construct(CuisinierService $cuisinierServiceData)
    {
        $this->cuisinierServiceData = $cuisinierServiceData;
    }

    public function index()
    {
        $data = $this->cuisinierServiceData->getCuisinier();
        return view('personnels_maison.cuisinier',['cuisiniers' => $data]);
    }

    public function search()
    {
        $data = $this->cuisinierServiceData->search();
        return view('personnels_maison.cuisinier',['cuisiniers' => $data]);
    }
}
