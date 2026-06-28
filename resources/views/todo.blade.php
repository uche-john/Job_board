<x-layout>
    <div class="max-w-5xl mx-auto px-4 py-12">

        <!-- Header Section -->
        <div class="mb-10 pb-6 border-b border-gray-200 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Todo List</h1>
                <p class="mt-1 text-sm text-gray-500">Manage your task workflows and daily timelines cleanly.</p>
            </div>
        </div>

        <!-- Main Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            <!-- Left Column: Create Form -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm sticky top-6">
                <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
                    <span>⚡</span> Add New Task
                </h2>

                <form action="/todo" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="task" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Task</label>
                        <input
                            type="text"
                            name="task"
                            id="task"
                            placeholder="Do the dishes"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 text-slate-900 text-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:bg-white transition-all duration-150"
                        >
                        @error('task')
                            <p class="mt-1.5 text-xs font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="time" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-2">Time</label>
                        <input
                            type="text"
                            id="time"
                            name="time"
                            placeholder="noon"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 text-slate-900 text-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:bg-white transition-all duration-150"
                        >
                        @error('time')
                            <p class="mt-1.5 text-xs font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="w-full mt-2 bg-slate-900 text-white font-semibold text-sm py-3 px-4 rounded-xl hover:bg-cyan-900 shadow-sm active:scale-[0.98] transition-all duration-150"
                    >
                        Submit
                    </button>
                </form>
            </div>

            <!-- Right Column: Task List Display -->
            <div class="lg:col-span-2 space-y-3">
                <ul>
                    @foreach ($todo as $tod)
                        <li class="bg-white border border-gray-200 hover:border-cyan-600/40 rounded-xl p-4 mb-3 flex items-center justify-between shadow-sm hover:shadow transition-all duration-200 group">
                            <div class="flex items-center gap-4 min-w-0">
                                <!-- Modern Check Indicator Circle -->
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 flex-shrink-0 group-hover:border-cyan-600 transition-colors"></div>
                                <div class="min-w-0">
                                    <p class="text-base font-semibold text-slate-800 truncate group-hover:text-cyan-900 transition-colors">
                                        {{ $tod->Task }}
                                    </p>
                                    <p class="text-xs text-gray-400 flex items-center gap-1 mt-0.5">
                                        <span>⏰</span> {{ $tod->Time }}
                                    </p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center gap-2 ml-4">
                                <button
                                    type="submit"
                                    form="delete-form-{{ $tod->id }}"
                                    class="text-xs font-medium text-gray-400 hover:text-red-600 bg-gray-50 hover:bg-red-50 px-3 py-1.5 rounded-lg transition-all duration-150 cursor-pointer"
                                >
                                    Delete
                                </button>
                            </div>
                        </li>

                        <!-- Hidden Unique Delete Target Form -->
                        <form method="POST" action="/todo/{{ $tod->id }}" id="delete-form-{{ $tod->id }}" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</x-layout>
