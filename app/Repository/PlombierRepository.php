<?php

namespace App\Repository;

use App\Interface\UserFonctionnality;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlombierRepository implements UserFonctionnality
{
    public function getPlombier()
    {
        return User::where('staff', '=', "plombiers")->simplePaginate(15);
    }

    public function search($data)
    {
        return DB::table('users')->where('staff', 'plombiers')
        ->where(function($query) use ($data) {
            $searchTerm = '%' . $data . '%';
            $query->where('city', 'like', $searchTerm)
                  ->orWhere('quarter', 'like', $searchTerm);
        })
        ->simplePaginate(15);
    }
}