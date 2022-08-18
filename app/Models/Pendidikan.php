<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikans';
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasOne(Post::class);
    }

    public function pelamars()
    {
        return $this->hasOne(Pelamar::class);
    }
}
