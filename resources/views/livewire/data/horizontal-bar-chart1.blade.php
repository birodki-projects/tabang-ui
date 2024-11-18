<!-- resources/views/livewire/data/line-chart1.blade.php -->
<div class="w-full max-w-6xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg" x-data="{ activeTab: 'chart' }">
        <!-- Navigation -->
        <div class="border-b border-gray-200">
            <nav class="flex flex-wrap px-4 py-3">
                <button @click="activeTab = 'chart'"
                    :class="{ 'text-blue-600 border-b-2 border-blue-600': activeTab === 'chart', 'text-gray-500 hover:text-gray-700': activeTab !== 'chart' }"
                    class="flex items-center px-3 py-2 text-sm font-medium whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                    Visualisasi
                </button>

                <button @click="activeTab = 'series'"
                    :class="{ 'text-blue-600 border-b-2 border-blue-600': activeTab === 'series', 'text-gray-500 hover:text-gray-700': activeTab !== 'series' }"
                    class="flex items-center px-3 py-2 text-sm font-medium whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                    Data Series
                </button>

                <button @click="activeTab = 'raw'"
                    :class="{ 'text-blue-600 border-b-2 border-blue-600': activeTab === 'raw', 'text-gray-500 hover:text-gray-700': activeTab !== 'raw' }"
                    class="flex items-center px-3 py-2 text-sm font-medium whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                        <line x1="6" y1="6" x2="6" y2="6"></line>
                        <line x1="6" y1="18" x2="6" y2="18"></line>
                    </svg>
                    Data Raw
                </button>
            </nav>
        </div>

        <!-- Content -->
        <div class="p-4">
            <!-- Chart Tab -->
            <div x-show="activeTab === 'chart'" class="h-96"> <!-- or higher if needed -->
                <div style="width: 100%; height: 100%;">
                    <x-chartjs-component :chart="$chart" />
                </div>
            </div>

            <!-- Series Tab -->
            <div x-show="activeTab === 'series'" class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Tahun</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                2021</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                2022</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                2023</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                2024</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-900 bg-gray-50">
                                Jumlah Pemanfaatan Kajian Dampak Kependudukan Beserta Model Solusi Strategis
                            </td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">22</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">75</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">36</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-900">30</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Raw Data Tab -->
            <div x-show="activeTab === 'raw'" class="overflow-hidden">
                <div class="space-y-4">
                    <!-- Controls Row -->
                    <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                        <!-- Entries Dropdown -->
                        <div class="w-full sm:w-auto flex items-center space-x-2">
                            <select
                                class="form-select rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="text-sm text-gray-600">Data</span>
                        </div>

                        <!-- Search Input -->
                        <div class="w-full sm:w-auto">
                            <input type="search"
                                class="w-full form-input rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                placeholder="Pencarian...">
                        </div>
                    </div>

                    <!-- Table Container -->
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-blue-600">
                                <tr>
                                    <th
                                        class="px-4 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                        NO</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        KODE WILAYAH</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        WILAYAH</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        TAHUN</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        NAMA KEGIATAN</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        PERANGKAT DAERAH</th>
                                    <th
                                        class="px-4 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                                        JUMLAH</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Table rows -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-center sm:justify-between">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm space-x-1" aria-label="Pagination">
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Previous</a>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                            <span
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-gray-50 text-sm font-medium text-gray-700">...</span>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">11</a>
                            <a href="#"
                                class="relative inline-flex items-center px-3 py-2 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Next</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
