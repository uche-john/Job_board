<x-layout>
    <div class="max-w-5xl mx-auto px-6 py-12">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10 pb-6 border-b border-gray-200">
            <div>
                <h1 class="text-3xl font-extrabold text-cyan-900 tracking-tight">
                    Available Job Openings
                </h1>
                <p class="text-gray-500 text-sm mt-1">
                    Explore current positions or manage platform listings.
                </p>
            </div>
            <div>
                <a href="/jobs/create" class="inline-flex items-center justify-center px-5 py-2.5 bg-cyan-900 text-white font-semibold text-sm rounded-xl hover:bg-cyan-800 transition shadow-sm">
                    + Post a New Job
                </a>
            </div>
        </div>

        <div class="space-y-4">
            @if($jobs->isEmpty())
                <div class="text-center py-12 bg-gray-50 rounded-2xl border border-gray-200">
                    <p class="text-gray-500 text-base">No job listings found at the moment.</p>
                </div>
            @else
                @foreach($jobs as $job)
                    <a href="/jobs/{{ $job->id }}" class="block group">
                        <div class="p-6 bg-white border-2 border-gray-200 rounded-2xl shadow-sm hover:border-cyan-900 transition-all duration-200 transform group-hover:-translate-y-0.5">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                <div>
                                    <span class="inline-block text-xs font-semibold uppercase tracking-wider text-green-500 mb-1">
                                        {{ $job->employer->name ?? 'Direct Employer' }}
                                    </span>
                                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-cyan-900 transition-colors">
                                        {{ $job->title }}
                                    </h3>
                                </div>
                                <div class="sm:text-right">
                                    <span class="inline-flex items-center px-3 py-1 bg-cyan-50 border border-cyan-100 text-cyan-900 font-medium text-sm rounded-full">
                                        💰 {{ $job->pay }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>

        <div class="mt-10 pt-6 border-t border-gray-100">
            {{ $jobs->links() }}
        </div>

    </div>
</x-layout>
