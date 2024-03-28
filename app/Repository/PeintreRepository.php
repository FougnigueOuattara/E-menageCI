<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class PeintreRepository implements UserFonctionnality
{
    public function getPeintre()
    {
        return DB::table('users')->where('staff', '=', "Peintre")->simplePaginate(15);
    }

    public function search(Request $request)
    {
        return DB::table('users')->where('staff', '=', 'Peintre')
        ->where(function(Builder $query) use ($request){
            $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
        })->simplePaginate(15);
    }

}