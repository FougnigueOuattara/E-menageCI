<?php

namespace App\Service;

use App\Repository\NounouRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NounouService
{
    private $nounouRepositoryData;
    private $datasearch;

    public function __construct(NounouRepository $nounouRepositoryData, Request $datasearch)
    {
        $this->nounouRepositoryData = $nounouRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getNounou()
    {
        return $this->nounouRepositoryData->getNounou();
    }

    public function search()
    {
        return $this->nounouRepositoryData->search($this->datasearch);
    }
}