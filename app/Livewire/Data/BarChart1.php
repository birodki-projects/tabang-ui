<?php

namespace App\Livewire\Data;

use Livewire\Component;
use Livewire\WithPagination;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;
class BarChart1 extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public function render()
    {
        $chart = Chartjs::build()
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['2021', '2022', '2023', '2024'])
            ->datasets([
                [
                    "label" => "Jumlah Pemanfaatan Kajian",
                    'backgroundColor' => "rgba(59, 130, 246, 0.1)", // Tailwind blue-500 with opacity
                    'borderColor' => "rgb(59, 130, 246)", // Tailwind blue-500
                    "data" => [22, 75, 36, 30],
                    "fill" => true,
                    "tension" => 0.4,
                ]
            ])
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
                'plugins' => [
                    'legend' => [
                        'position' => 'top',
                    ],
                    'title' => [
                        'display' => true,
                        'text' => 'Jumlah Pemanfaatan Kajian Dampak Kependudukan'
                    ]
                ],
                'scales' => [
                    'y' => [
                        'beginAtZero' => true,
                    ],
                ],
            ]);


        // You would typically get this data from your database
        $rawData = $this->getRawData();

        return view('livewire.data.bar-chart1', [
            'chart' => $chart,
            'rawData' => $rawData
        ]);
    }

    private function getRawData()
    {
        // This is where you would implement your actual data fetching logic
        // For now, returning sample data matching your table
        return collect([
            [
                'id' => 1,
                'kode_wilayah' => '32.04',
                'wilayah' => 'Kabupaten Bandung',
                'tahun' => '2021',
                'nama_kegiatan' => 'Sosialisasi Tentang Pemanfaatan Kajian Dampak Kependudukan',
                'perangkat_daerah' => 'SKPD Kabupaten Bandung',
                'jumlah' => 22
            ],
            // Add more data as needed
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

}
