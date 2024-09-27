<?php

namespace App\Repository;

use App\Models\Metier;

class MetierRepository 
{
    //
    public function __construct()
    {
        
    }

    /**
     * Recupère et retourne la liste des metiers
     * @return collection
     */
    public function getAllMetier()
    {
        $metiers = Metier::all();

        return $metiers;
    }
}