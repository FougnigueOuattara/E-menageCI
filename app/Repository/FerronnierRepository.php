<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FerronnierRepository implements UserFonctionnality
{
    public function getFerronnier()
    {
        return DB::table('users')->where('staff', '=', "ferronniers")->simplePaginate(15);
    }

    public function search($data)
    {
        return DB::table('users')
        ->where('staff', 'ferronniers')
        ->where(function($query) use ($data) {
            $searchTerm = '%' . $data . '%';
            $query->where('city', 'like', $searchTerm)
                  ->orWhere('quarter', 'like', $searchTerm);
        })
        ->simplePaginate(15);
    
    }

}