<!-- resources/views/components/category-section.blade.php -->
<div class="mt-20" x-data="{ activeCategory: null }">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto px-4">
        <!-- Kinerja Pembangunan Card -->
        <div>
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" 
                :class="{ 'rounded-b-none': activeCategory === 'pembangunan' }">
                <div class="category-header cursor-pointer bg-orange-400 p-4 flex justify-between items-center rounded-lg"
                    :class="{ 'rounded-b-none': activeCategory === 'pembangunan' }"
                    @click="activeCategory = (activeCategory === 'pembangunan' ? null : 'pembangunan')">
                    <h3 class="text-lg font-bold text-white">Kinerja Pembangunan</h3>
                    <svg class="w-6 h-6 text-white transition-transform duration-200"
                        :class="{ 'rotate-180': activeCategory === 'pembangunan' }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <div x-show="activeCategory === 'pembangunan'" 
                class="bg-white rounded-b-lg shadow-md"
                x-collapse>
                <div class="p-4 grid grid-cols-3 gap-2">
                    <!-- SPM -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">SPM</span>
                    </a>
                     <!-- IKU -->
                     <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">IKU</span>
                    </a>

                    <!-- RPJMD -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">RPJMD</span>
                    </a>

                    <!-- TPB -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/>
                                <path d="M9 18h6"/>
                                <path d="M10 22h4"/>
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">TPB</span>
                    </a>

                    <!-- IKK Outcome -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                                <path d="M10 6h4"/>
                                <path d="M10 10h4"/>
                                <path d="M10 14h4"/>
                                <path d="M10 18h4"/>
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">IKK<br>Outcome</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Kinerja Keuangan Card -->
        <div>
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                :class="{ 'rounded-b-none': activeCategory === 'keuangan' }">
                <div class="category-header cursor-pointer bg-orange-400 p-4 flex justify-between items-center rounded-lg"
                    :class="{ 'rounded-b-none': activeCategory === 'keuangan' }"
                    @click="activeCategory = (activeCategory === 'keuangan' ? null : 'keuangan')">
                    <h3 class="text-lg font-bold text-white">Kinerja Keuangan</h3>
                    <svg class="w-6 h-6 text-white transition-transform duration-200"
                        :class="{ 'rotate-180': activeCategory === 'keuangan' }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <div x-show="activeCategory === 'keuangan'"
                class="bg-white rounded-b-lg shadow-md"
                x-collapse>
                <div class="p-4 grid grid-cols-3 gap-2">
                    <!-- Download -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">Download</span>
                    </a>
                    <!-- Kinerja Keuangan -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">Kinerja Keuangan</span>
                    </a>
                    <!-- Proporsi Keuangan -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">Proporsi Keuangan</span>
                    </a>
                    <!-- Rasio Kinerja Keuangan -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">Rasio Kinerja Keuangan</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- E Renja Card -->
        <div>
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300"
                :class="{ 'rounded-b-none': activeCategory === 'renja' }">
                <div class="category-header cursor-pointer bg-orange-400 p-4 flex justify-between items-center rounded-lg"
                    :class="{ 'rounded-b-none': activeCategory === 'renja' }"
                    @click="activeCategory = (activeCategory === 'renja' ? null : 'renja')">
                    <h3 class="text-lg font-bold text-white">E Renja</h3>
                    <svg class="w-6 h-6 text-white transition-transform duration-200"
                        :class="{ 'rotate-180': activeCategory === 'renja' }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            <div x-show="activeCategory === 'renja'"
                class="bg-white rounded-b-lg shadow-md"
                x-collapse>
                <div class="p-4 grid grid-cols-3 gap-2">
                    <!-- TA 2025 -->
                    <a href="#" class="flex flex-col items-center p-2 rounded-lg hover:bg-orange-50 transition-colors duration-200 group">
                        <div class="w-12 h-12 mb-2 rounded-full bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors duration-200">
                            <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-gray-700 text-center group-hover:text-orange-600">TA 2025</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>