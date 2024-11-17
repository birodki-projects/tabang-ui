<?php

namespace App\Livewire\Data;

use Livewire\Component;

class DataHeader1 extends Component
{

    public $kodeProgram = 'DP2KBP3A/080';
    public $title = 'Jumlah Pemanfaatan Kajian Dampak Kependudukan Beserta Model Solusi Strategis Sebagai Peringatan Dini Dampak Kependudukan Kepada Pemangku Kepentingan';
    public function render()
    {
        return view('livewire.data.data-header1');
    }
}
