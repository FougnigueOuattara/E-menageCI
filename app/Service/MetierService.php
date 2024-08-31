<?php

namespace App\Service;

use App\Repository\MetierRepository;

class MetierService 
{
    private $metiersRepository;
    //
    public function __construct(MetierRepository $metiersRepository)
    {
        $this->metiersRepository = $metiersRepository;
    }

    public function getAllMetier()
    {
        $metiers =  $this->metiersRepository->getAllMetier();

        return $metiers;
    }
}