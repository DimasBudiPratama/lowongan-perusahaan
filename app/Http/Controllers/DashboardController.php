<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function AdminHome()
    {
        return view('dashboard.dashboard',[
            'title' => 'Dashboard',
            'categories' => DB::table('categories')->count(),
            'posts' => DB::table('posts')->count(),
            'pelamars' => DB::table('pelamars')->count(),
            'lamars' => DB::table('lamars')->count()
           ]);
    }
}
