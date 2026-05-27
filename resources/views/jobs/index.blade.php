<x-layout >
    <h1 class="ml-10 text-5xl text-cyan-900 mb-7">This is the jobs page</h1>
</x-layout>
<div class="ml-10 text-xl mb-7">
    <ol>
    @foreach($jobs as $job)

            <a href="/jobs/{{$job['id']}}">
                <li class="p-3 border-2 border-cyan-900 rounded-2xl my-2">
            <h3 class="text-2xl text-cyan-400"> {{$job ->employer ->name}} </h3>
                <strong class="text-cyan-900">{{$job['title']}}</strong> : Pays {{$job['pay']}} per year.
             </li>
            </a>

    @endforeach
</ol>
<h1 class="text-xl">This is a test for the Tailwind css stuff</h1>
<div>
    {{$jobs->links()}}
</div>
</div>
