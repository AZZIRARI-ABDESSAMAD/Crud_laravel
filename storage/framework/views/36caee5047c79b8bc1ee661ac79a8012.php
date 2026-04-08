<?php $__env->startSection('content'); ?>
    
    <div class="mb-6 sm:mb-8">
        <a href="<?php echo e(route('stagiaires.index')); ?>"
            class="inline-flex items-center gap-1.5 text-xs sm:text-sm text-slate-400 hover:text-violet-400 transition-colors mb-3 sm:mb-4">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to list
        </a>
        <h1
            class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-white via-purple-200 to-fuchsia-200 bg-clip-text text-transparent">
            Stagiaire Details
        </h1>
    </div>

    
    <div
        class="rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur-lg shadow-2xl shadow-purple-500/5 overflow-hidden">
        
        <div
            class="px-5 py-4 sm:px-8 sm:py-6 bg-gradient-to-r from-violet-600/20 to-fuchsia-600/20 border-b border-white/10 flex items-center gap-3 sm:gap-5">
            <div
                class="w-12 h-12 sm:w-16 sm:h-16 rounded-xl sm:rounded-2xl bg-gradient-to-br from-violet-500 to-fuchsia-500 flex items-center justify-center text-lg sm:text-2xl font-bold text-white shadow-lg shadow-violet-500/30 shrink-0">
                <?php echo e(strtoupper(substr($stagiaire->Fullname, 0, 1))); ?>

            </div>
            <div class="min-w-0">
                <h2 class="text-lg sm:text-xl font-bold text-white truncate"><?php echo e($stagiaire->Fullname); ?></h2>
                <p class="text-xs sm:text-sm text-slate-400 mt-0.5 truncate"><?php echo e($stagiaire->email); ?></p>
            </div>
        </div>

        
        <div class="divide-y divide-white/5">
            <div class="px-5 py-3 sm:px-8 sm:py-4 flex items-center justify-between gap-4">
                <span class="text-xs sm:text-sm text-slate-400 flex items-center gap-2 shrink-0">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                    </svg>
                    ID
                </span>
                <span class="text-xs sm:text-sm font-mono text-white"><?php echo e($stagiaire->id); ?></span>
            </div>
            <div class="px-5 py-3 sm:px-8 sm:py-4 flex items-center justify-between gap-4">
                <span class="text-xs sm:text-sm text-slate-400 flex items-center gap-2 shrink-0">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Full Name
                </span>
                <span class="text-xs sm:text-sm font-medium text-white truncate"><?php echo e($stagiaire->Fullname); ?></span>
            </div>
            <div class="px-5 py-3 sm:px-8 sm:py-4 flex items-center justify-between gap-4">
                <span class="text-xs sm:text-sm text-slate-400 flex items-center gap-2 shrink-0">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email
                </span>
                <span class="text-xs sm:text-sm text-white truncate"><?php echo e($stagiaire->email); ?></span>
            </div>
            <div class="px-5 py-3 sm:px-8 sm:py-4 flex items-center justify-between gap-4">
                <span class="text-xs sm:text-sm text-slate-400 flex items-center gap-2 shrink-0">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Registered
                </span>
                <span class="text-xs sm:text-sm text-white"><?php echo e($stagiaire->created_at->format('M d, Y – H:i')); ?></span>
            </div>
        </div>

        
        <div
            class="px-5 py-4 sm:px-8 sm:py-5 bg-white/[0.02] border-t border-white/10 flex flex-col sm:flex-row items-stretch sm:items-center gap-2 sm:gap-3">
            <a href="<?php echo e(route('stagiaires.edit', $stagiaire->id)); ?>"
                class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg sm:rounded-xl text-sm font-semibold bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white hover:from-violet-500 hover:to-fuchsia-500 shadow-lg shadow-violet-500/25 hover:shadow-violet-500/40 transition-all duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit
            </a>
            <form action="<?php echo e(route('stagiaires.destroy', $stagiaire->id)); ?>" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this stagiaire?')" class="contents">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg sm:rounded-xl text-sm font-semibold bg-red-500/10 text-red-400 border border-red-500/20 hover:bg-red-500/20 hover:text-red-300 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Delete
                </button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/azzirari-abdessamad/Project/Project_Laravel/laravel_with_abdessamad/crud/resources/views/show.blade.php ENDPATH**/ ?>