<h1>All Posts</h1>
@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->caption }}</p>
    <p>{{ $post->status }}</p>
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}"width="200">
    @endif
    <hr>
    <a href="/posts/{{$post->id}}/edit">Edit</a>
@endforeach
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
@if(auth()->user()->role=='admin')
    <form method="POST" action="/posts/{{$post->id}}/approve">
        @csrf
        <button>Approve</button>
    </form>
@endif