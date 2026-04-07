<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">

<div class="max-w-2xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Posts</h1>

        <a href="{{ route('posts.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
           + Add Post
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @foreach($posts as $post)
    <div class="bg-white rounded-2xl shadow p-5 mb-5">

        <!-- 👤 User Info -->
        <div class="flex items-center gap-3 mb-3">

            @if($post->user->image)
                <img src="{{ asset('storage/'.$post->user->image) }}" 
                     class="w-10 h-10 rounded-full object-cover">
            @else
                <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}" 
                     class="w-10 h-10 rounded-full">
            @endif

            <div>
                <p class="font-semibold">{{ $post->user->name }}</p>
                <p class="text-gray-400 text-sm">
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
        </div>

        <!-- 📝 Post Content -->
        <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
        <p class="text-gray-700 mb-3">{{ $post->description }}</p>

        <!-- 🖼️ Post Image -->
        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" 
                 class="w-full rounded-lg mb-3">
        @endif

        <!-- ⚙️ Actions -->
        <div class="flex justify-between items-center mt-3">

            <div class="flex gap-4 text-sm">
                <a href="{{ route('posts.show', $post->id) }}" 
                   class="text-blue-500 hover:underline">View</a>

                <a href="{{ route('posts.edit', $post->id) }}" 
                   class="text-yellow-500 hover:underline">Edit</a>
            </div>

            <form method="POST" 
                  action="{{ route('posts.destroy', $post->id) }}"
                  onsubmit="return confirm('Delete this post?')">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:underline text-sm">
                    Delete
                </button>
            </form>
        </div>

    </div>
    @endforeach

    <!-- 📄 Pagination -->
    <div class="mt-6">
        {{ $posts->links() }}
    </div>

</div>

</body>
</html>