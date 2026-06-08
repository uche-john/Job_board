<x-layout>
    <div class="max-w-3xl mx-auto px-6 py-12">

        <div class="mb-10">
            <h1 class="text-4xl font-extrabold text-cyan-900 tracking-tight mb-3">
                About This Platform
            </h1>
            <p class="text-gray-500 text-lg">
                An ecosystem designed to streamline job tracking, robust data structures, and live routing.
            </p>
            <hr class="mt-6 border-gray-200">
        </div>

        <div class="space-y-8 text-gray-700 text-base/relaxed">

            <section>
                <h2 class="text-xl font-bold text-slate-900 mb-2">
                    Our Architecture
                </h2>
                <p>
                    This application isn't just a basic CRUD bulletin board—it’s a performance-focused web platform engineered using a modern full-stack approach. By leveraging **Laravel** on the backend and structuring unified, reusable UI components via **Blade**, the platform ensures clean data management, efficient query routing, and strict validation tracking across every single user request.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-slate-900 mb-2">
                    Engineered for Execution
                </h2>
                <p>
                    The layout and user experience are styled using **Tailwind CSS**, emphasizing responsive grids, crisp visual hierarchies, and atomic utility structures. Every data input—from creating a job listing to verifying user credentials—is processed through custom validation layers to maintain database normalization and system security.
                </p>
            </section>

            <section class="bg-cyan-50 border border-cyan-100 rounded-2xl p-5 mt-4">
                <h3 class="text-sm font-semibold text-cyan-900 uppercase tracking-wider mb-1">
                    System Blueprint
                </h3>
                <p class="text-sm text-cyan-800">
                    Built to demonstrate practical software engineering execution: integrating secure user authentication, optimized Eloquent database migrations, and a modular UI components framework that handles real-world web traffic seamlessly.
                </p>
            </section>

        </div>

        <div class="mt-12 pt-6 border-t border-gray-100 flex justify-between items-center text-sm text-gray-500">
            <span>Version 1.0.0</span>
            <a href="/jobs" class="text-cyan-900 font-medium hover:underline flex items-center gap-1">
                Back to Listings &rarr;
            </a>
        </div>

    </div>
</x-layout>
