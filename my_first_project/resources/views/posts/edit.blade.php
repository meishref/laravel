<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1 class="text-2xl font-bold mb-4">Edit Post</h1>

<form method="POST" action="/posts/{{ $post['id'] }}">
    @csrf
    @method('PUT')

    <input name="title" value="{{ $post['title'] }}"
        class="border p-2 w-full mb-3 rounded">

    <textarea name="body"
        class="border p-2 w-full mb-3 rounded">{{ $post['body'] }}</textarea>

    <button class="bg-yellow-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>

</body>
</html>