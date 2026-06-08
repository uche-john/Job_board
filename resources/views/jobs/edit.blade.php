<x-layout>
    <div class="max-w-4xl mx-auto px-6 py-12">

        <div class="mb-8 border-b border-gray-200 pb-6">
            <h1 class="text-2xl font-bold text-cyan-900 sm:text-3xl">
                Edit Job Profile
            </h1>
            <p class="mt-2 text-sm text-gray-500">
                You are updating the records for: <span class="font-semibold text-cyan-700 italic">"{{ $job->title }}"</span>
            </p>
        </div>

        <form class="border-2 rounded-2xl p-6 bg-gray-100 shadow-sm" method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Job Specifications</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Modify the fields below to update the live repository listing details.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-4">
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="title" name="title" placeholder="Operations manager" value="{{ $job->title }}" required />
                                <x-form-error name="title" />
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="pay">Salary</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="pay" name="pay" placeholder="$50,000/per month" value="{{ $job->pay }}" required />
                                <x-form-error name="pay" />
                            </div>
                        </div>

                    </div> </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div>
                    <button type="submit" form="delete-form" class="text-sm font-semibold text-red-600 hover:text-red-500 transition">
                        Delete Job
                    </button>
                </div>

                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900 hover:text-cyan-900">Cancel</a>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
        </form>

        <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>

    </div>
</x-layout>
