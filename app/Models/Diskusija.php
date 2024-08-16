<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Diskusija extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
