<?php

namespace App\Livewire\Data;

use Livewire\Component;

class Metadata1 extends Component
{
    public $kode = 'DP2KBP3A/080';
    public $produsenData = 'Dinas Pengenalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak (DP2KBP3A)';
    public $sifatData = 'Data Non Prioritas';
    public $frekuensiData = 'Tahunan';
    public $tglInput = '23 Februari 2023';
    public $tglUpdate = '17 November 2024, Pukul 16:19 WIB';
    public $kegiatanStatistik = 'Kompilasi Produk Administrasi';
    public $konsep = 'Pemanfaatan Kajian Dampak Kependudukan Beserta Model Solusi Strategis Sebagai Peringatan Dini Dampak Kependudukan Kepada Pemangku Kepentingan';
    public $definisi = 'Merupakan kegiatan yang bertujuan untuk memebritahukan mengenai manfaat dari kajian dampak kependudukan beserta model solusi Strategis Sebagai Peringatan Dini Dampak Kependudukan Kepada Pemangku Kepentingan termasuk organisasi masyarakat';
    public $ukuran = 'Jumlah';
    public $satuan = 'kegiatan';
    public $keterangan = null;

    public function render()
    {
        return view('livewire.data.metadata1');
    }

    public function download()
    {
        // Implement download functionality
    }
}