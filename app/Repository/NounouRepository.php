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
        return DB::table('users')->where('staff', '=', "Nounou")->simplePaginate(15);
    }

    public function search(Request $request)
    {
        return DB::table('users')->where('staff', '=', 'Nounou')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15);
    }
}