<div>
    <h2 class="text-2xl font-bold mb-4">{{ $heading }}</h2>
    <div class="mb-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center shadow">
                <svg class="w-8 h-8 mb-1 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/></svg>
                <div class="text-lg font-bold">{{ $summary[0]['value'] }}</div>
                <div class="text-gray-600 text-sm mt-1">Total Mahasiswa</div>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center shadow">
                <svg class="w-8 h-8 mb-1 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                <div class="text-lg font-bold">{{ $summary[1]['value'] }}</div>
                <div class="text-gray-600 text-sm mt-1">Total Dosen</div>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center shadow">
                <svg class="w-8 h-8 mb-1 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 10V4h16v6M4 10v10h16V10M4 10l8 5 8-5"/></svg>
                <div class="text-lg font-bold">{{ $summary[2]['value'] }}</div>
                <div class="text-gray-600 text-sm mt-1">Total Ruang Kelas</div>
            </div>
            <div class="bg-white rounded-lg border p-4 flex flex-col items-center shadow">
                <svg class="w-8 h-8 mb-1 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                <div class="text-lg font-bold">{{ $summary[3]['value'] }}</div>
                <div class="text-gray-600 text-sm mt-1">Total Jadwal Kuliah</div>
            </div>
        </div>
    </div>
    <!-- Chart atau statistik tambahan bisa ditambahkan di bawah sini -->
</div>