<?php

namespace App\Service;

use App\Repository\ElectricienRepository;
use Illuminate\Http\Request;

class ElectricienService
{
    private $electricienRepositoryData;
    private $datasearch;

    public function __construct(ElectricienRepository $electricienRepositoryData, Request $datasearch)
    {
        $this->electricienRepositoryData = $electricienRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getElectricien()
    {
        return $this->electricienRepositoryData->getElectricien();
    }

    public function search()
    {
        return $this->electricienRepositoryData->search($this->datasearch);
    }
}