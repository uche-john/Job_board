<x-layout>
    <div class="m-4 border-2 border-amber-950 p-5 rounded-3xl hover:bg-cyan-100">
        <h1 class="text-3xl text-cyan-900 mb-2.5">{{$job-> title}}</h1>
    <h1 class="text-2xl text-cyan-600">This job was posted by <span class="text-2xl text-cyan-950">{{$job->employer->name}}</span></h1>
    <h1 class="text-2xl text-cyan-600">And it pays {{$job-> pay}} per year</h1>
    <h2 class="pt-2 ">This is a job discription for <span> {{$job-> title}}</span> <span>({{$job->employer->name}})</span></h2>

    <h3>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae quaerat in, praesentium vero necessitatibus, ex molestias provident veritatis officia omnis dolor similique deserunt incidunt. Quasi magnam sequi eligendi. Optio, vero.
    </h3>

       <div class="mt-10">
            <a href="/jobs/{{$job->id}}/edit" class="border border-cyan-900 p-2 mt-10 rounded-2xl hover:bg-cyan-900 hover:text-amber-100"> Edit Job</a>
        </div>
    </div>


</x-layout>
