<x-layout>
    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="text-center py-16 bg-gradient-to-r from-cyan-900 to-slate-800 rounded-3xl shadow-xl p-8 mb-12">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-4 tracking-tight">
                Welcome to Job Hub
            </h1>
            <p class="text-cyan-100 text-lg sm:text-xl max-w-2xl mx-auto font-light">
                Discover your next career move or post new opportunities in real time. Built with speed, tracking, and clean data structure.
            </p>

            <div class="mt-8 flex justify-center gap-4">
                @auth
                    <a href="/jobs" class="px-6 py-3 bg-green-400 text-slate-950 font-semibold rounded-xl hover:bg-green-300 transition shadow-md">
                        Explore Available Jobs
                    </a>
                @else
                    <a href="/login" class="px-6 py-3 bg-white text-cyan-950 font-semibold rounded-xl hover:bg-gray-100 transition shadow-md">
                        Log In
                    </a>
                    <a href="/register" class="px-6 py-3 bg-cyan-950 text-white font-semibold rounded-xl border border-cyan-800 hover:bg-cyan-900 transition shadow-md">
                        Create Account
                    </a>
                @endauth
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-100 p-6 rounded-2xl border border-gray-200 shadow-sm">
                <div class="text-green-500 font-bold text-lg mb-2">⚡ Live Telemetry</div>
                <p class="text-gray-600 text-sm/relaxed">
                    Track data synchronization and active posts instantly across our localized system architecture.
                </p>
            </div>

            <div class="bg-gray-100 p-6 rounded-2xl border border-gray-200 shadow-sm">
                <div class="text-green-500 font-bold text-lg mb-2">📊 Analytics Driven</div>
                <p class="text-gray-600 text-sm/relaxed">
                    Built to structure raw data inputs elegantly, making tracking, monitoring, and parsing clear and reliable.
                </p>
            </div>

            <div class="bg-gray-100 p-6 rounded-2xl border border-gray-200 shadow-sm">
                <div class="text-green-500 font-bold text-lg mb-2">🛡️ Secured Design</div>
                <p class="text-gray-600 text-sm/relaxed">
                    Engineered with modern request verification layers to keep data pathways functional and protected.
                </p>
            </div>
        </div>
    </div>
</x-layout>
