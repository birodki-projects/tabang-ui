<!-- resources/views/livewire/data/metadata1.blade.php -->
<div class="bg-white rounded-lg shadow-lg p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Detail Data</h2>

    <!-- Basic Info Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Left Column -->
        <div class="space-y-6">
            <!-- Kode -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Kode</div>
                <div class="font-medium text-gray-900">{{ $kode ?? 'DP2KBP3A/080' }}</div>
            </div>

            <!-- Produsen Data -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Produsen Data</div>
                <div class="font-medium text-gray-900">{{ $produsenData ?? 'Dinas Pengenalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak (DP2KBP3A)' }}</div>
            </div>

            <!-- Sifat Data -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Sifat Data</div>
                <div class="font-medium text-gray-900">{{ $sifatData ?? 'Data Non Prioritas' }}</div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- Frekuensi Data -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Frekuensi Data</div>
                <div class="font-medium text-gray-900">{{ $frekuensiData ?? 'Tahunan' }}</div>
            </div>

            <!-- Tgl. Input Data -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Tgl. Input Data</div>
                <div class="font-medium text-gray-900">{{ $tglInput ?? '23 Februari 2023' }}</div>
            </div>

            <!-- Tgl. Data Diperbaharui -->
            <div class="grid grid-cols-2 gap-4 border-b border-gray-100 pb-4">
                <div class="text-gray-600">Tgl. Data Diperbaharui</div>
                <div class="font-medium text-gray-900">{{ $tglUpdate ?? '17 November 2024, Pukul 16:19 WIB' }}</div>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="space-y-6">
        <!-- Kegiatan Statistik -->
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Kegiatan Statistik Penghasil Data</div>
            <div class="font-medium text-gray-900">{{ $kegiatanStatistik ?? 'Kompilasi Produk Administrasi' }}</div>
        </div>

        <!-- Konsep -->
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Konsep</div>
            <div class="font-medium text-gray-900">{{ $konsep ?? 'Pemanfaatan Kajian Dampak Kependudukan Beserta Model Solusi Strategis Sebagai Peringatan Dini Dampak Kependudukan Kepada Pemangku Kepentingan' }}</div>
        </div>

        <!-- Definisi -->
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Definisi</div>
            <div class="font-medium text-gray-900">{{ $definisi ?? 'Merupakan kegiatan yang bertujuan untuk memebritahukan mengenai manfaat dari kajian dampak kependudukan beserta model solusi Strategis Sebagai Peringatan Dini Dampak Kependudukan Kepada Pemangku Kepentingan termasuk organisasi masyarakat' }}</div>
        </div>

        <!-- Ukuran -->
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Ukuran</div>
            <div class="font-medium text-gray-900">{{ $ukuran ?? 'Jumlah' }}</div>
        </div>

        <!-- Satuan -->
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Satuan</div>
            <div class="font-medium text-gray-900">{{ $satuan ?? 'kegiatan' }}</div>
        </div>

        <!-- Keterangan if exists -->
        @if(isset($keterangan))
        <div class="border-b border-gray-100 pb-4">
            <div class="text-gray-600 mb-2">Keterangan</div>
            <div class="font-medium text-gray-900">{{ $keterangan }}</div>
        </div>
        @endif
    </div>

    <!-- Download Button -->
    <div class="mt-8">
        <button class="inline-flex items-center px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-md transition-colors duration-150">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            DOWNLOAD
        </button>
    </div>
</div>