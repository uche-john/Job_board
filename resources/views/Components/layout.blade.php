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
       <div class="flex space-x-4">
       @guest
            <div  class="inline-flex items-center justify-center px-5 py-2.5 bg-cyan-900 text-white font-semibold text-sm rounded-xl hover:bg-cyan-800 transition shadow-sm">
                <a href="/login">Login</a>
            </div>
        <div  class="inline-flex items-center justify-center px-5 py-2.5 bg-white text-cyan-900 border-2 border-cyan-900 font-semibold text-sm rounded-xl  transition shadow-sm">
            <a href="/register">Register</a>
        </div>
       @endguest
       @auth
            <form method="post" action="/logout">
                @csrf

                <x-form-button>Log Out</x-form-button>
            </form>
       @endauth
        <div  class="inline-flex items-center justify-center px-5 py-2.5 bg-white s text-cyan-900 font-semibold text-sm rounded-xl hover:shadow-sm hover:shadow-green-800 transition shadow-lg">
            <a href="/jobs/create">Create Jobs</a>
        </div>

       </div>
    </div>
    {{$slot}}
</body>
</html>
