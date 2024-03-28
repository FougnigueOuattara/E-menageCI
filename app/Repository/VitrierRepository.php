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
        return DB::table('users')->where('staff', '=', "Vitrier")->simplePaginate(15);
    }

    //Filter vitrier

    public function search(Request $request)
    {
        return DB::table('users')->where('staff', '=', 'Vitrier')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15);
    }
}