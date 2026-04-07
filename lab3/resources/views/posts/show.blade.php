<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>

<a href="{{ route('posts.index') }}">Back</a>

</body>
</html>