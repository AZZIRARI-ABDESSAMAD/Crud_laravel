<?php $__env->startSection('content'); ?>
    
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between sm:gap-4 mb-6 sm:mb-8">
        <div>
            <h1
                class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-white via-purple-200 to-fuchsia-200 bg-clip-text text-transparent">
                All Stagiaires
            </h1>
            <p class="text-slate-400 mt-1 text-xs sm:text-sm">Manage your trainees from one place</p>
        </div>
        <a href="<?php echo e(route('stagiaires.create')); ?>"
            class="inline-flex items-center justify-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white hover:from-violet-500 hover:to-fuchsia-500 shadow-lg shadow-violet-500/25 hover:shadow-violet-500/40 transition-all duration-300 w-full sm:w-auto">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Stagiaire
        </a>
    </div>

    
    <div class="block sm:hidden space-y-3">
        <?php $__empty_1 = true; $__currentLoopData = $stagiaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('stagiaires.show', $stg->id)); ?>"
                class="block rounded-xl border border-white/10 bg-white/5 backdrop-blur-lg p-4 hover:bg-white/10 transition-all duration-200">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-violet-500 to-fuchsia-500 flex items-center justify-center text-sm font-bold text-white shadow-md shrink-0">
                        <?php echo e(strtoupper(substr($stg->Fullname, 0, 1))); ?>

                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-medium text-white truncate"><?php echo e($stg->Fullname); ?></p>
                        <p class="text-xs text-slate-400 truncate"><?php echo e($stg->email); ?></p>
                    </div>
                    <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="rounded-xl border border-white/10 bg-white/5 p-8 text-center">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center">
                        <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </div>
                    <p class="text-sm text-slate-400">No stagiaires found</p>
                    <a href="<?php echo e(route('stagiaires.create')); ?>"
                        class="text-sm text-violet-400 hover:text-violet-300 underline underline-offset-4">Add your first
                        one →</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    
    <div
        class="hidden sm:block rounded-2xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur-lg shadow-2xl shadow-purple-500/5">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gradient-to-r from-violet-600/30 to-fuchsia-600/30 border-b border-white/10">
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-violet-300">#</th>
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-violet-300">Full Name</th>
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-violet-300">Email</th>
                        <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-violet-300 text-right">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php $__empty_1 = true; $__currentLoopData = $stagiaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-white/5 transition-colors duration-200 group">
                            <td class="px-6 py-4 text-sm text-slate-400 font-mono"><?php echo e($loop->iteration); ?></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-br from-violet-500 to-fuchsia-500 flex items-center justify-center text-xs font-bold text-white shadow-md">
                                        <?php echo e(strtoupper(substr($stg->Fullname, 0, 1))); ?>

                                    </div>
                                    <span class="text-sm font-medium text-white"><?php echo e($stg->Fullname); ?></span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-300"><?php echo e($stg->email); ?></td>
                            <td class="px-6 py-4 text-right">
                                <a href="<?php echo e(route('stagiaires.show', $stg->id)); ?>"
                                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-xs font-medium bg-violet-500/10 text-violet-300 border border-violet-500/20 hover:bg-violet-500/20 hover:text-violet-200 transition-all duration-200">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Details
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center gap-3">
                                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center">
                                        <svg class="w-7 h-7 text-slate-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                    </div>
                                    <p class="text-sm text-slate-400">No stagiaires found</p>
                                    <a href="<?php echo e(route('stagiaires.create')); ?>"
                                        class="text-sm text-violet-400 hover:text-violet-300 underline underline-offset-4">Add
                                        your first one →</a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/azzirari-abdessamad/Project/Project_Laravel/laravel_with_abdessamad/crud/resources/views/index.blade.php ENDPATH**/ ?>