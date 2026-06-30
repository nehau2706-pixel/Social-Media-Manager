<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Post Title"><br><br>
    <textarea name="caption"></textarea><br><br>
    <input type="file" name="image"><br><br>
    <input type="datetime-local" name="scheduled_at"><br><br>
    <button>Create</button>
</form>