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
        return DB::table('users')
            ->leftJoin('evaluations', 'users.id', '=', 'evaluations.evaluated_id') // Jointure sur la table evaluations
            ->where('users.staff', 'plombiers')
            ->where(function ($query) use ($data) {
                $searchTerm = '%' . $data . '%';
                $query->where('users.city', 'like', $searchTerm)
                    ->orWhere('users.quarter', 'like', $searchTerm);
            })
            ->select('users.*', DB::raw('AVG(evaluations.note) as average_note')) // Calcul de la moyenne des notes
            ->groupBy('users.id') // Groupement par utilisateur pour calculer la moyenne des notes
            ->simplePaginate(15);
    }
}
