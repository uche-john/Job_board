<x-layout>
    <h1 class="ml-5 text-2xl font-bold text-cyan-900">Login</h1>

    <form class="border-2 rounded-2xl m-6 p-5 bg-gray-100" method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Login to Your Account</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" placeholder="john.doe@example.com" :value="old('email')" type="email" required/>
                            <x-form-error name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" placeholder="••••••••" type="password" required/>
                            <x-form-error name="password" />
                        </div>
                    </div>

                </div> </div>
        </div>

        <hr class="mt-5">

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>
</x-layout>
