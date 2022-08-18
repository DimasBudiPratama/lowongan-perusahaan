<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals';
    protected $guarded = ['id'];

    public function lamars()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
