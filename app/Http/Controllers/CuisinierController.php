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
        $user_data = $this->cuisinierServiceData->getCuisinier();
        return view('personnels_maison.cuisinier',['user_data' => $user_data]);
    }
}
