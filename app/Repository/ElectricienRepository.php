<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class ElectricienRepository implements UserFonctionnality
{
    //Get all Electricien

    public function getElectricien()
    {
        return DB::table('users')->where('staff', '=', "electriciens")->simplePaginate(15);
    }

    
    //Filter Electricien

    public function search($data)
    {
        return DB::table('users')
        ->where('staff', '=', 'electriciens')
        ->where(function(Builder $query) use ($data) {
            $searchTerm = '%' . $data . '%';
            $query->where('city', 'like', $searchTerm)
                  ->orWhere('quarter', 'like', $searchTerm);
        })
        ->simplePaginate(15);
    }
}
