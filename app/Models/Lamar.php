<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelamar;
use App\Models\Post;

class Lamar extends Model
{
    use HasFactory;
    protected $table = 'lamars';
    protected $guarded = ['id'];

    public function pelamars()
    {
        return $this->belongsTo(Pelamar::class);
    }

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }
}
