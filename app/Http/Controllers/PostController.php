<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Pelamar;
use App\Models\Lamar;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
       
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in : ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by : ' . $author->name;
        }
        return view('posts',[
            "title" => "All Jobs" . $title,
            "categories" => Category::all(),
            "posts" => Post::latest()->cari(request(['search','category','author']))->paginate(5)->withQueryString() //Filter ngambil di model,digunakan untuk search data
        ]);
    }

    public function show(Post $post) //Post ngambil Model Post , $post buat variabel untuk di panggil
    {
        $id = auth()->user()->pelamars->id;
        return view('post',[
            "title" => "Single Posts",
            "dancuk" => $post,
            "pelamar" => Pelamar::findorfail($id),
            "pos" => $post->latest()->take(6)->get(),
            "categories" => Category::all(),
        ]);
    }

    public function lamar(Post $post)
    {
         $id = auth()->user()->pelamars->id;
         $pelamar = Pelamar::findorfail($id);
         $lowongan = $post;
         $title   = 'Lamaran';
         return view('pelamar.lamar', compact('pelamar', 'lowongan', 'title'));
    }

    public function store(Request $request)
    {
     $Data = $request->validate([
            'post_id' => 'required',
            'berkas' => 'required|file|max:2048',
     ]);
 
     $dt       = Carbon::now();
     $todayDate = $dt->toDayDateTimeString();

     
     if($request->file('berkas')){
         $Data['berkas'] = $request->file('berkas')->store('pelamar-file');
     }

     $Data['pelamar_id'] = auth()->user()->pelamars->id;
     $Data['waktu'] = $todayDate;
     $Data['status'] = 'Seleksi Administrasi';
 
     Lamar::create($Data);
     return redirect('/posts')->with('success', 'New Post Has Been Added');
    }
}
