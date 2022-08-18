<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pendidikan;

class Pelamar extends Model
{
    use HasFactory;
    protected $table = 'pelamars';
    protected $guarded = ['id'];
    

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function lamars()
    {
        return $this->hasMany(Lamar::class);
    }

    //mengambil data lamaran dari user yang sedang login
    public function getlamaranuser($id)
    {
        $builder = $this->db->table('lamars');
        $builder->select('*,lamars.status as statuslamar,jadwals.waktu as waktuwawancara,lamars.waktu as waktulamar');
        $builder->join('posts', 'lamars.post_id = posts.id');
        $builder->join('categories', 'posts.category_id = categories.id');
        $builder->join('jadwals', 'lamars.lamar_id = jadwals.id','left');
        $builder->where('lamars.pelamar_id',$id);
        $builder->orderBy('lamars.id', 'DESC');
        return $builder->get();  
    }
    
}
