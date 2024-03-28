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
        $data = $this->nounouServiceData->getNounou();
        return view('personnels_maison.nounou',['nounous'=>$data]);
    }

    public function search()
    {
        $data = $this->nounouServiceData->search();
        return view('personnels_maison.nounou',['nounous'=>$data]);
    }
}
