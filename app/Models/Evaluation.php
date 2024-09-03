<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'comments', 'evaluator_id', 'evaluated_id'];

        // L'utilisateur qui donne la note
        public function evaluator()
        {
            return $this->belongsTo(User::class, 'evaluator_id');
        }

        // L'utilisateur qui reçoit la note
        public function evaluated()
        {
            return $this->belongsTo(User::class, 'evaluated_id');
        }

}
