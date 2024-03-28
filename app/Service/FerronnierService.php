<?php

namespace App\Service;

use App\Repository\FerronnierRepository;
use Illuminate\Http\Request;

class FerronnierService
{
    private $ferronnierRepositoryData;
    private $datasearch;

    public function __construct(FerronnierRepository $ferronnierRepositoryData, Request $datasearch)
    {
        $this->ferronnierRepositoryData = $ferronnierRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getFerronnier()
    {
        return $this->ferronnierRepositoryData->getFerronnier();
    }

    public function search()
    {
        return $this->ferronnierRepositoryData->search($this->datasearch);
    }
}