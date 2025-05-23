<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\Widget;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\RuangKelas;
use App\Models\JadwalKuliah;

class StatistikDashboard extends ChartWidget
{
    protected static ?string $heading = 'Statistik Data';

    // Tambahkan statistik ringkas untuk tiap data
    public static function getSummary(): array
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();
        $totalRuang = RuangKelas::count();
        $totalJadwal = JadwalKuliah::count();

        $rataMahasiswaPerRuang = $totalRuang > 0 ? round($totalMahasiswa / $totalRuang, 2) : 0;
        $rataJadwalPerDosen = $totalDosen > 0 ? round($totalJadwal / $totalDosen, 2) : 0;

        return [
            [
                'label' => 'Total Mahasiswa',
                'value' => $totalMahasiswa,
            ],
            [
                'label' => 'Total Dosen',
                'value' => $totalDosen,
            ],
            [
                'label' => 'Total Ruang Kelas',
                'value' => $totalRuang,
            ],
            [
                'label' => 'Total Jadwal Kuliah',
                'value' => $totalJadwal,
            ],
            [
                'label' => 'Rata-rata Mahasiswa per Ruang',
                'value' => $rataMahasiswaPerRuang,
            ],
            [
                'label' => 'Rata-rata Jadwal per Dosen',
                'value' => $rataJadwalPerDosen,
            ],
        ];
    }

    protected function getData(): array
    {
        // Pie chart untuk distribusi data
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Data',
                    'data' => [
                        Mahasiswa::count(),
                        Dosen::count(),
                        RuangKelas::count(),
                        JadwalKuliah::count(),
                    ],
                    'backgroundColor' => [
                        '#f59e42', // Mahasiswa
                        '#3b82f6', // Dosen
                        '#10b981', // Ruang Kelas
                        '#f43f5e', // Jadwal Kuliah
                    ],
                ],
            ],
            'labels' => ['Mahasiswa', 'Dosen', 'Ruang Kelas', 'Jadwal Kuliah'],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Bisa diganti 'pie', 'doughnut', dll
    }

    // Tampilkan statistik ringkas di atas chart
    public function render(): \Illuminate\View\View
    {
        return view('filament.widgets.statistik-dashboard', [
            'summary' => self::getSummary(),
            'chartData' => $this->getData(),
            'chartType' => $this->getType(),
            'heading' => static::$heading,
        ]);
    }
}