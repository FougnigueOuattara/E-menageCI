<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NounouRepository implements UserFonctionnality
{
    public function getNounou()
    {
        return DB::table('users')->where('staff', '=', "nounous")->simplePaginate(15);
    }

    public function search($data)
    {
        return DB::table('users')
    ->where('staff', '=', 'nounous')
    ->where(function(Builder $query) use ($data) {
        $searchTerm = '%' . $data . '%';
        $query->where('city', 'like', $searchTerm)
              ->orWhere('quarter', 'like', $searchTerm);
    })
    ->simplePaginate(15);

    }
}