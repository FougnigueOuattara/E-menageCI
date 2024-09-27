<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class VitrierRepository implements UserFonctionnality
{
    //Get all vitrier and paginate them

    public function getVitrier()
    {
        return DB::table('users')->where('staff', '=', "vitriers")->simplePaginate(15);
    }

    //Filter vitrier

    public function search($data)
    {
        return DB::table('users')->where('staff', '=', 'vitriers')
    ->where(function(Builder $query) use ($data) {
        $searchTerm = '%' . $data . '%';
        $query->where('city', 'like', $searchTerm)
              ->orWhere('quarter', 'like', $searchTerm);
    })
    ->simplePaginate(15);

    }
}