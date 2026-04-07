<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<h1 class="text-2xl font-bold mb-4">Posts</h1>

<a href="/posts/create" class="bg-blue-500 text-white px-4 py-2 rounded">
    Add Post
</a>

@foreach($posts as $post)
<div class="bg-white p-4 mt-4 rounded shadow">
    <h2 class="text-xl font-semibold">{{ $post['title'] }}</h2>
    <p>{{ $post['body'] }}</p>

    <div class="mt-2 space-x-2">
        <a href="/posts/{{ $post['id'] }}" class="text-blue-500">Show</a>
        <a href="/posts/{{ $post['id'] }}/edit" class="text-yellow-500">Edit</a>

        <form method="POST" action="/posts/{{ $post['id'] }}"
              class="inline"
              onsubmit="return confirm('Delete this post?')">
            @csrf
            @method('DELETE')
            <button class="text-red-500">Delete</button>
        </form>
    </div>
</div>
@endforeach

</body>
</html>