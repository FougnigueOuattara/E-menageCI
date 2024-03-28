<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuisierRepository implements UserFonctionnality
{
    public function getMenuisier()
    {
        return DB::table('users')->where('staff', '=', "Menuisier")->simplePaginate(15);
    }

    public function search(Request $request)
    {
        return DB::table('users')->where('staff', '=', 'Menuisier')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15);
    }
}