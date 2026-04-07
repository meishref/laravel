<!DOCTYPE html>
<html>
<head>
    <title>Show</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10">

<h1 class="text-2xl font-bold">{{ $post['title'] }}</h1>

<p class="mt-4">{{ $post['body'] }}</p>

<a href="/posts" class="text-blue-500 mt-4 inline-block">
    Back
</a>

</body>
</html>