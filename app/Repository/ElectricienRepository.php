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
        return DB::table('users')->where('staff', '=', "Electricien")->simplePaginate(15);
    }

    
    //Filter Electricien

    public function search(Request $request)
    {
        return DB::table('users')->where('staff', '=', 'Electricien')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15);
    }
}
