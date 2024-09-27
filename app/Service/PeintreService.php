<?php

namespace App\Service;

use App\Repository\PeintreRepository;
use Illuminate\Http\Request;

class PeintreService
{
    private $peintreRepositoryData;
    private $datasearch;

    public function __construct(PeintreRepository $peintreRepositoryData, Request $datasearch)
    {
        $this->peintreRepositoryData = $peintreRepositoryData;
        $this->datasearch = $datasearch;
    }

    public function getPeintre()
    {
        return $this->peintreRepositoryData->getPeintre();
    }

    public function search($data)
    {
        return $this->peintreRepositoryData->search($data);
    }
}
