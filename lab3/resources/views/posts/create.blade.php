<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1>Add Post</h1>

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <input name="title" placeholder="Title" class="border p-2"><br><br>

    <textarea name="description" class="border p-2"></textarea><br><br>

   
    <input type="file" name="image"><br><br>

    <button class="bg-green-500 text-white px-4 py-2">Save</button>
</form>

</body>
</html>