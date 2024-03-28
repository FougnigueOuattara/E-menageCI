<?php

namespace App\Http\Controllers;

use App\Service\MenagerService;
use Illuminate\Http\Request;

class MenagerController extends Controller
{
    //
    private $menagerServiceData;

    public function __construct(MenagerService $menagerServiceData)
    {
        $this->menagerServiceData = $menagerServiceData;
    }

    public function index()
    {
        $data = $this->menagerServiceData->getMenager();
        return view('personnels_maison.menager',['menagers'=>$data]);
    }

    public function search()
    {
        $data = $this->menagerServiceData->search();
        return view('personnels_maison.menager',['menagers'=>$data]);
    }
}
