<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Komentar extends Model
{
    use HasFactory;

    public function vest()
    {
        return $this->belongsTo(Vest::class, 'vest_id');
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
