<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\PlombierService;
use App\Service\UserService;
use Illuminate\Http\Request;

class PlombierController extends Controller
{
    //
    private $plomblierServiceData;
    private $userServiceData;

    public function __construct(PlombierService $plomblierServiceData, UserService $userServiceData)
    {
        $this->plomblierServiceData = $plomblierServiceData;
        $this->userServiceData = $userServiceData;
    }

    public function index()
    {
        $userdata = $this->plomblierServiceData->getPlombier();
        return view('personnels_batiment.plombier',['userdata' => $userdata]);
    }

    public function details($id)
    {
        $data = $this->userServiceData->getOneUser($id); 
        return view('personnels_batiment.description',["plombier"=>$data]);
    }
}
