<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1 class="text-2xl font-bold mb-4">Add Post</h1>

<form method="POST" action="/posts">
    @csrf

    <input name="title" placeholder="Title"
        class="border p-2 w-full mb-3 rounded">

    <textarea name="body"
        class="border p-2 w-full mb-3 rounded"></textarea>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Save
    </button>
</form>

</body>
</html>