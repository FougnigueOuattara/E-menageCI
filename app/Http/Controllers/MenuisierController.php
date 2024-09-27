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
        $user_data = $this->menuisierDataService->getMenuisier();
        return view('personnels_batiment.menuisier',['user_data' => $user_data]);
    }

}
