<?php

namespace App\Http\Controllers;

use App\Service\NounouService;
use Illuminate\Http\Request;

class NounouController extends Controller
{
    //
    private $nounouServiceData;

    public function __construct(NounouService $nounouServiceData)
    {
        $this->nounouServiceData = $nounouServiceData;
    }

    public function index()
    {
        $user_data = $this->nounouServiceData->getNounou();
        return view('personnels_maison.nounou',['user_data'=>$user_data]);
    }
}
