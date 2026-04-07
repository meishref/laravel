<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1>Edit Post</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')

    <input name="title" value="{{ $post->title }}" class="border p-2"><br><br>

    <textarea name="description" class="border p-2">{{ $post->description }}</textarea><br><br>

    <button class="bg-yellow-500 text-white px-4 py-2">Update</button>
</form>

</body>
</html>