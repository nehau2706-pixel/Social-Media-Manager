<?php
namespace App\Http\Controllers;
use App\Models\Post;
class DashboardController extends Controller
{
    public function index()
    {
        $total = Post::count();
        $approved = Post::where('status', 'approved')->count();
        $pending = Post::where('status', 'pending')->count();
        $recent = Post::latest() ->take(5) ->get();
        return view('dashboard',compact('total','approved','pending','recent'));
    }
    public function create()
    {
        return view('posts.create');
    }
}