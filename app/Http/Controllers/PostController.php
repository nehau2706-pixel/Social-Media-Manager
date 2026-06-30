<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
        }
        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $image,
            'scheduled_at' => $request->scheduled_at,
        ]);
        return redirect('/posts');
    }
    public function show(Post $post)
    {
        //
    }
    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request,Post $post){
        $post->update(['title'=>$request->title,'caption'=>$request->caption]);
        return redirect('/posts');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }
    public function approve(Post $post){
        if(auth()->user()->role!='admin'){
            abort(403);
        }
        $post->update(['status'=> 'approved']);
        return back();
    }
}