<?php

namespace App\Service;

use App\Repository\MenuisierRepository;
use Illuminate\Http\Request;

class MenuisierService
{
    private $menuisierRepositoryData;
    private $datasearch;

    public function __construct(MenuisierRepository $menuisierRepositoryData, Request $datasearch)
    {
        $this->menuisierRepositoryData = $menuisierRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getMenuisier()
    {
        return $this->menuisierRepositoryData->getMenuisier();
    }

    public function search($data)
    {
        return $this->menuisierRepositoryData->search($data);
    }
}