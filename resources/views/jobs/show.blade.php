<x-layout>
    <div class="m-4 border-2 border-gray-200 p-5 rounded-3xl hover:border-cyan-900">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <div>
                                        <span class="inline-block font-semibold uppercase text-xl tracking-wider text-green-500 mb-1">
                                            {{ $job->employer->name ?? 'Direct Employer' }}
                                        </span>
                                        <h3 class="text-2xl font-bold text-slate-900 group-hover:text-cyan-900 transition-colors">
                                            {{ $job->title }}
                                        </h3>
                                    </div>
                                    <div class="sm:text-right">
                                        <span class="inline-flex items-center px-3 py-1 bg-cyan-50 border border-cyan-100 text-cyan-900 font-medium text-sm rounded-full">
                                            💰 {{ $job->pay }}
                                        </span>
                                    </div>
                                </div>

        <h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae quaerat in, praesentium vero necessitatibus, ex molestias provident veritatis officia omnis dolor similique deserunt incidunt. Quasi magnam sequi eligendi. Optio, vero.
        </h3>

           @can('edit_job', $job)
             <div class="mt-10">
                <a href="/jobs/{{$job->id}}/edit" class="border border-cyan-900 p-2 px-4 mt-10 rounded-2xl hover:bg-cyan-900 hover:text-amber-100"> Edit Job</a>
            </div>
           @endcan


    </div>
</x-layout>
