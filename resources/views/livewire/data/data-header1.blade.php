<div class="w-full bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 rounded-lg shadow-lg">
    <div class="container mx-auto px-6 py-8">
        <div class="flex items-center gap-8">
            <!-- Left Side - Icon -->
            <div class="flex-shrink-0">
                <div class="relative w-16 sm:w-32 h-16 sm:h-32">
                    <!-- Isometric Base -->
                    <div class="absolute inset-0 bg-white/20 rounded-full"></div>
                    
                    <!-- Data Icon -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    
                    <!-- Person Icon -->
                    <div class="absolute -bottom-4 -right-4">
                        <div class="bg-white/90 rounded-full p-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Text Content -->
            <div class="flex-1">
                <!-- Program Code -->
                <div class="inline-block px-3 py-1 bg-amber-400 text-amber-900 text-sm font-medium rounded-md mb-3">
                    {{ $kodeProgram }}
                </div>

                <!-- Title -->
                <h1 class="text-l sm:text-xl md:text-2xl font-bold text-white leading-tight">
                    {{ $title }}
                </h1>
            </div>
        </div>
    </div>
</div>