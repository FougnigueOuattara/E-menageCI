<?php

namespace App\Http\Controllers;

use App\Service\MenuisierService;
use Illuminate\Http\Request;

class MenuisierController extends Controller
{
    //
    private $menuisierDataService;

    public function __construct(MenuisierService $menuisierDataService)
    {
        $this->menuisierDataService = $menuisierDataService;
    }

    public function index()
    {
        $data = $this->menuisierDataService->getMenuisier();
        return view('personnels_batiment.menuisier',['menuisiers' => $data]);
    }

    public function search()
    {
        $data = $this->menuisierDataService->search();
        return view('personnels_batiment.menuisier',['menuisiers' => $data]);
    }
}
