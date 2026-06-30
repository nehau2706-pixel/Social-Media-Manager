<h1>Edit Post</h1>
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <label>Title</label><br>
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <label>Caption</label><br>
    <textarea name="caption">{{$post->caption}}</textarea><br><br>
    <button>Update</button>
</form>