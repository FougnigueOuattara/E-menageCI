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
        return DB::table('users')->leftJoin('user_statuts', 'users.id', '=', 'user_statuts.user_id')->where('staff', '=', "peintres")->orWhere('user_statuts.vip', '=', "Actif")->orderBy('user_statuts.created_at','desc')->simplePaginate(15);
    }

    public function search($data)
    {
        return DB::table('users')->where('staff', '=', 'peintres')
    ->where(function($query) use ($data) {
        $searchTerm = '%' . $data . '%';
        $query->where('city', 'like', $searchTerm)
              ->orWhere('quarter', 'like', $searchTerm);
    })
    ->simplePaginate(15);

    }

}