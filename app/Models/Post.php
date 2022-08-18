<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Pendidikan;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    
     
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body',
    // ];
    protected $table = 'posts';
    protected $guarded = ['id'];

    protected $with = ['category','author']; //with digunakan untuk membatasi pemanggilan query author,category supaya tidak buffring/lemot jika data sudah terlalu banyak atau disebut juga eager loading

    //data cari pada controller di ambil dari sini, Digunakan untuk mencari data / search scopeBasing,
    public function scopeCari($query , array $filters)
    {
        $query->when($filters['search'] ?? false , function($query, $search) {
            return $query->where('lowongan','like','%'. $search .'%')
                         ->orWhere('keterangan','like','%'. $search .'%');
        });
        
        $query->when($filters['category'] ?? false , function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false , fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                    $query->where('username', $author)
                )
            );
        //whereHas Digunakan untuk berelasi dengan table category, category di ambil public function category
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
        return $this->belongsTo(User::class,'user_id'); //Untuk Mengganti user_id menjadi author supaya bisa memanggil variabel author
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function lamars()
    {
        return $this->hasMany(Lamar::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class); //Untuk memanggil table user tanpa harus mengganti foregn key di table post
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'lowongan'
            ]
        ];
    }
}
