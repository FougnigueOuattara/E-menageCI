<?php

namespace App\Service;

use App\Repository\PlombierRepository;
use Illuminate\Http\Request;

class PlombierService
{
    private $plombierRepositoryData;
    private $datasearch;

    public function __construct(PlombierRepository $plombierRepositoryData, Request $datasearch)
    {
        $this->plombierRepositoryData = $plombierRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getPlombier()
    {
        return $this->plombierRepositoryData->getPlombier();
    }

    public function search($data)
    {
        return $this->plombierRepositoryData->search($data);
    }
}
