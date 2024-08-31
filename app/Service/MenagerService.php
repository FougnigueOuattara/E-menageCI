<?php

namespace App\Service;

use App\Repository\MenagerRepository;
use Illuminate\Http\Request;

class MenagerService
{
    private $menagerRepositoryData;
    private $datasearch;

    public function __construct(MenagerRepository $menagerRepositoryData, Request $datasearch)
    {
        $this->menagerRepositoryData = $menagerRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getMenager()
    {
        return $this->menagerRepositoryData->getMenager();
    }

    public function search($data)
    {
        return $this->menagerRepositoryData->search($data);
    }
}