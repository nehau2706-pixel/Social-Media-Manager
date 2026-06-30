<x-app-layout>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
<div class="mb-6">
    <p class="text-2xl sm:text-2xl font-bold">
        Welcome {{ auth()->user()->name }}
    </p>
    <p class="text-sm sm:text-base">
        Role: {{ auth()->user()->role }}
    </p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 mb-10">
    <a href="{{ route('posts.create') }}">
        <div class="bg-purple-300 p-5 rounded-xl shadow hover:bg-purple-400 h-full">
            <h2 class="text-lg sm:text-xl font-bold">➕ Create Post</h2>
            <p>Add a new post</p>
        </div>
    </a>
    <a href="{{ route('posts.index') }}">
        <div class="bg-purple-300 p-5 rounded-xl shadow hover:bg-purple-400 h-full">
            <h2 class="text-lg sm:text-xl font-bold">📄 All Posts</h2>
            <p>View all created posts</p>
        </div>
    </a>
    <div class="bg-pink-300 p-5 rounded-xl shadow">
        <h3 class="font-bold">Total Posts</h3>
        <h1 class="text-2xl sm:text-3xl font-bold">{{ $total }}</h1>
    </div>
    <div class="bg-pink-300 p-5 rounded-xl shadow">
        <h3 class="font-bold">Approved</h3>
        <h1 class="text-2xl sm:text-3xl font-bold">{{ $approved }}</h1>
    </div>
    <div class="bg-pink-300 p-5 rounded-xl shadow">
        <h3 class="font-bold">Pending</h3>
        <h1 class="text-2xl sm:text-3xl font-bold">{{ $pending }}</h1>
    </div>
</div>
<h2 class="text-xl sm:text-2xl font-bold mb-6">Recent Posts</h2>
<div class="space-y-4">
    @foreach($recent as $post)
    <div class="bg-blue-200 shadow rounded-lg p-4 flex flex-col sm:flex-row gap-4">
        @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
            class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-lg shrink-0">
        @endif
        <div class="min-w-0">
            <h3 class="text-lg font-bold break-words">{{ $post->title }}</h3>
            <p class="text-gray-600 break-words">{{ $post->caption }}</p>
            <p class="mt-2 text-sm">Status: {{ ucfirst($post->status) }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>
</x-app-layout>
