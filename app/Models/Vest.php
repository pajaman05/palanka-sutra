<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vest extends Model
{
    use HasFactory;

    public function kategorija()
    {
        return $this->belongsTo(Kategorija::class, 'kategorija_id', 'id');
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function komentari()
    {
        return $this->hasMany(Komentar::class, 'vest_id', 'id');
    }

    public function status()
    {
        if ($this->published && $this->accepted) {
            return 'Publishovana';
        } elseif (!$this->published && $this->accepted) {
            return 'Ceka da bude publishovana'; // čeka da je moderator objavi
        } elseif (!$this->published && !$this->accepted) {
            return 'Odbijena';
        } else {
            return 'Na cekanju';
        }
    }
}
