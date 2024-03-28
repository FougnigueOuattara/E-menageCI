<?php

namespace App\Service;
use App\Repository\VitrierRepository;
use Illuminate\Http\Request;

class VitrierService
{
    private $vitrierRepositoryData;
    private $datasearch;

    public function __construct(VitrierRepository $vitrierRepositoryData, Request $datasearch)
    {
        $this->vitrierRepositoryData = $vitrierRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getVitrier()
    {
        return $this->vitrierRepositoryData->getVitrier(); 
    }

    public function search()
    {
        return $this->vitrierRepositoryData->search($this->datasearch);
    }

}