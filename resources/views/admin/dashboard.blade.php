<x-headeradmin>
    <div class="container mx-auto px-4 py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Hadir Hari Ini</p>
                        <p class="text-2xl font-bold">{{ $hadirHariIni }}</p>
                    </div>
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        <i class="fas fa-user-check text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Terlambat</p>
                        <p class="text-2xl font-bold">{{ $terlambatHariIni }}</p>
                    </div>
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
                        <i class="fas fa-clock text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Total Pegawai</p>
                        <p class="text-2xl font-bold">{{ $totalPegawai }}</p>
                    </div>
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between">
                    <div>
                        <p class="text-gray-500">Tidak Hadir</p>
                        <p class="text-2xl font-bold">{{ $tidakHadirHariIni }}</p>
                    </div>
                    <div class="bg-red-100 text-red-600 p-3 rounded-full">
                        <i class="fas fa-user-times text-xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-headeradmin>