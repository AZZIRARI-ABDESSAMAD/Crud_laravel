<?php $__env->startSection('content'); ?>
    
    <div class="mb-6 sm:mb-8">
        <a href="<?php echo e(route('stagiaires.show', $stagiaire->id)); ?>"
            class="inline-flex items-center gap-1.5 text-xs sm:text-sm text-slate-400 hover:text-violet-400 transition-colors mb-3 sm:mb-4">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to details
        </a>
        <h1
            class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-white via-purple-200 to-fuchsia-200 bg-clip-text text-transparent">
            Edit Stagiaire
        </h1>
        <p class="text-slate-400 mt-1 text-xs sm:text-sm">Update the information for <span
                class="text-violet-400 font-medium"><?php echo e($stagiaire->Fullname); ?></span></p>
    </div>

    
    <div
        class="rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur-lg shadow-2xl shadow-purple-500/5 p-5 sm:p-8">
        <form action="<?php echo e(route('stagiaires.update', $stagiaire->id)); ?>" method="post" class="space-y-5 sm:space-y-6">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>

            
            <div>
                <label for="fullname" class="block text-xs sm:text-sm font-medium text-slate-300 mb-1.5 sm:mb-2">Full
                    Name</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 sm:pl-3.5 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="text" id="fullname" name="fullname" value="<?php echo e($stagiaire->Fullname); ?>"
                        placeholder="Enter Fullname"
                        class="w-full pl-9 sm:pl-10 pr-3 sm:pr-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/50 focus:border-violet-500/50 transition-all duration-200">
                </div>
            </div>

            
            <div>
                <label for="email" class="block text-xs sm:text-sm font-medium text-slate-300 mb-1.5 sm:mb-2">Email
                    Address</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 sm:pl-3.5 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="text" id="email" name="email" value="<?php echo e($stagiaire->email); ?>"
                        placeholder="Enter email"
                        class="w-full pl-9 sm:pl-10 pr-3 sm:pr-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/50 focus:border-violet-500/50 transition-all duration-200">
                </div>
            </div>

            
            <div>
                <label for="password" class="block text-xs sm:text-sm font-medium text-slate-300 mb-1.5 sm:mb-2">New
                    Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 sm:pl-3.5 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Enter new password"
                        class="w-full pl-9 sm:pl-10 pr-3 sm:pr-4 py-2.5 sm:py-3 rounded-lg sm:rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-2 focus:ring-violet-500/50 focus:border-violet-500/50 transition-all duration-200">
                </div>
                <p class="mt-1 sm:mt-1.5 text-xs text-slate-500">Leave blank to keep current password</p>
            </div>

            
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 sm:gap-3 pt-1 sm:pt-2">
                <button type="submit"
                    class="flex-1 py-2.5 sm:py-3 px-5 sm:px-6 rounded-lg sm:rounded-xl text-sm font-semibold bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white hover:from-violet-500 hover:to-fuchsia-500 shadow-lg shadow-violet-500/25 hover:shadow-violet-500/40 transition-all duration-300 cursor-pointer">
                    Update Stagiaire
                </button>
                <a href="<?php echo e(route('stagiaires.show', $stagiaire->id)); ?>"
                    class="py-2.5 sm:py-3 px-5 sm:px-6 rounded-lg sm:rounded-xl text-sm font-medium text-slate-400 border border-white/10 hover:bg-white/5 hover:text-white transition-all duration-200 text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/azzirari-abdessamad/Project/Project_Laravel/laravel_with_abdessamad/crud/resources/views/edit.blade.php ENDPATH**/ ?>