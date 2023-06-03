<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HouseStaff extends Model
{
    use HasFactory;
    public function houseStaffs():BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
