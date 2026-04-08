<nav class="sticky top-0 z-50 backdrop-blur-xl bg-white/5 border-b border-white/10 shadow-lg shadow-purple-500/5">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14 sm:h-16">
            {{-- Brand --}}
            <a href="{{ route('stagiaires.index') }}" class="flex items-center gap-2 group">
                <div
                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-gradient-to-br from-violet-500 to-fuchsia-500 flex items-center justify-center shadow-lg shadow-violet-500/25 group-hover:shadow-violet-500/40 transition-shadow">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <span
                    class="text-base sm:text-lg font-bold bg-gradient-to-r from-violet-400 to-fuchsia-400 bg-clip-text text-transparent">Stagiaires</span>
            </a>

            {{-- Nav Links --}}
            <div class="flex items-center gap-1">
                <a href="{{ route('stagiaires.index') }}"
                    class="px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg text-xs sm:text-sm font-medium text-slate-300 hover:text-white hover:bg-white/10 transition-all duration-200">
                    📋 List
                </a>
                <a href="{{ route('stagiaires.create') }}"
                    class="px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg text-xs sm:text-sm font-medium text-slate-300 hover:text-white hover:bg-white/10 transition-all duration-200">
                    ➕ Create
                </a>
            </div>
        </div>
    </div>
</nav>
