<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Pendidikan;
use App\Models\Lamar;
// use Clockwork\Storage\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // return view('dashboard.posts.index',
        // [
        //     'post' => Post::where('user_id', auth()->user()->id)->get()
        // ]);
        return view('dashboard.posts.index',[
            'title' => 'Lowongan',
            'post' => Post::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    //Membatasi Hak Level
    if(auth()->guest() || auth()->user()->level !== '1'){
        //Jika Level nya 1 di view create di jalankan
        return view('dashboard.posts.create', [
            'title' => 'Lowongan',
            'categories' => Category::all(),
            'pendidikan' => Pendidikan::all(),
        ]);
        } else {
            //Jika level nya bukan satu di larikan ke index
            return view('dashboard.posts.index',
            [
                'post' => Post::where('user_id', auth()->user()->id)->get()
            ]);
        }

    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'lowongan' => 'required|max:255',
            'sampul' => 'image|file|max:2048', //Jika gambar kosong tidak masalah, karena mengambil udah API Gambar
            'slug'  => 'required|unique:posts',
            'category_id'   => 'required',
            'pendidikan_id'   => 'required',
            'keterangan'  => 'required',
            'jenis_pekerjaan'  => 'required',
            'pengalaman'  => 'required',
            'gaji'  => 'required',
            'mulai'  => 'required',
            'selesai'  => 'required',
        ]);

        //Upload File Jika Ingin Upload Gambar di Direktori Local
        if($request->file('sampul')){
            $Data['sampul'] = $request->file('sampul')->store('post-images');
        }

        $Data['user_id'] = auth()->user()->id;

        Post::create($Data);

        return redirect('/dashboard/posts')->with('success', 'New Post Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'title' => 'Lowongan',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //Membatasi Hak Akses Level
        if(auth()->guest() || auth()->user()->level !== '1'){
           //Jika Level nya 1 di view create di jalankan
        return view('dashboard.posts.edit', [
            'title' => 'Lowongan',
            'post'          => $post,
            'categories'    => Category::all(),
            'pendidikan'    => Pendidikan::all(),
          ]);
        } else {
            //Jika level nya bukan satu di larikan ke index
            return view('dashboard.posts.index',
            [
                'post' => Post::where('user_id', auth()->user()->id)->get()
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'lowongan' => 'required|max:255',
            'sampul' => 'image|file|max:2048', //Jika gambar kosong tidak masalah, karena mengambil udah API Gambar
            'category_id'   => 'required',
            'pendidikan_id'   => 'required',
            'keterangan'  => 'required',
            'jenis_pekerjaan'  => 'required',
            'pengalaman'  => 'required',
            'gaji'  => 'required',
            'mulai'  => 'required',
            'selesai'  => 'required',
        ];

        //Menampilkan jika terdapat flug yang sama
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $Data = $request->validate($rules);

        //Upload File Jika Ingin Upload Gambar di Direktori Local
        if($request->file('sampul')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $Data['sampul'] = $request->file('sampul')->store('post-images');
        }

        $Data['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)
                    ->update($Data);

        return redirect('/dashboard/posts')->with('success', 'Post Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->sampul) {
            Storage::delete($post->sampul);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Delete Post Succesfully');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->lowongan);
        return response()->json(['slug' => $slug]);
    }

    public function gantiStatus(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->status = $request->status;
        $post->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
