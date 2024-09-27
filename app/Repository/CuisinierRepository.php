<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuisinierRepository implements UserFonctionnality
{
    public function getCuisinier()
    {
        return DB::table('users')->where('staff', '=', "cuisiniers")->simplePaginate(15);
    }

    public function search($data)
    {
        return DB::table('users')
    ->where('staff', '=', 'cuisiniers')
    ->where(function(Builder $query) use ($data){
        $searchTerm = '%' . $data . '%';
        $query->where('city', 'like', $searchTerm)
              ->orWhere('quarter', 'like', $searchTerm);
    })
    ->simplePaginate(15);

    }
}