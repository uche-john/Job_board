<x-layout>
    <h1 class="ml-5 text-2xl font-bold text-cyan-900">Register</h1>

    <form class="border-2 rounded-2xl m-6 p-5 bg-gray-100" method="POST" action="/register">
        @csrf

        <div class="space-y-8">
            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Account</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" name="first_name" placeholder="John" required/>
                            <x-form-error name="first_name" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="last_name" name="last_name" placeholder="Doe" required/>
                            <x-form-error name="last_name" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" placeholder="john.doe@example.com" type="email" required/>
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

                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" required/>
                            <x-form-error name="password_confirmation" />
                        </div>
                    </div>

                </div> </div>
        </div>

        <hr class="mt-5">

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
