<?php

namespace App\Service;

use App\Repository\CuisinierRepository;
use Illuminate\Http\Request;

class CuisinierService
{
    private $cuisinierRepositoryData;
    private $datasearch;

    public function __construct(CuisinierRepository $cuisinierRepositoryData, Request $datasearch)
    {
        $this->cuisinierRepositoryData = $cuisinierRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getCuisinier()
    {
        return $this->cuisinierRepositoryData->getCuisinier();
    }

    public function search()
    {
        return $this->cuisinierRepositoryData->search($this->datasearch);
    }
}