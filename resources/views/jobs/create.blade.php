<x-layout>
    <h1 class="ml-5 text-2xl font-bold text-cyan-900">This is the Create page</h1>

    <form class="border-2 rounded-2xl m-6 p-5 bg-gray-100" method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Provide the necessary details to publish a new job opening on the platform.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" name="title" placeholder="Operations manager" required />
                            <x-form-error name="title" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="pay">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="pay" name="pay" placeholder="$50,000/per month" required />
                            <x-form-error name="pay" />
                        </div>
                    </div>

                </div> </div>
        </div>

        <hr class="mt-5">

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
