<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'comments', 'comment_title', 'evaluator_pseudo', 'evaluator_id', 'evaluated_id'];

        // L'utilisateur qui donne la note
        public function evaluator() : BelongsTo
        {
            return $this->belongsTo(User::class, 'evaluator_id');
        }

        // L'utilisateur qui reçoit la note
        public function evaluated() : BelongsTo
        {
            return $this->belongsTo(User::class, 'evaluated_id');
        }

}
