<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="sm:flex sm:justify-between m-5" style="padding-bottom: 2%">
        <nav class="">
            <a href="/" class="px-3">Home</a>
            <a href="/about" class="px-3">About</a>
            <a href="/students" class="px-3">Students</a>
            <a href="/todo" class="px-3">Todo</a>
        </nav>

    </div>
    {{$slot}}
</body>
</html>
