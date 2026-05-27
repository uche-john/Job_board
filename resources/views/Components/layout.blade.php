<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="sm:flex sm:justify-between m-5">
        <nav class="">
            <a href="/" class="px-3">Home</a>
            <a href="/about" class="px-3">About</a>
            <a href="/jobs" class="px-3">Jobs</a>
        </nav>
        <div  class="border-2 rounded-xl bg-gray-50 px-2 py-1.5 hover:bg-cyan-700 hover:text-white">
            <a href="jobs/create">Create Jobs</a>
        </div>
    </div>
    {{$slot}}
</body>
</html>
