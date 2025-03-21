<div class="min-h-screen w-full">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Dashboard Kepala Dinas</h1>
            <a href="#" class="text-white hover:underline">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="p-4">
        <h2 class="text-2xl font-bold mb-6">Selamat Datang, Kepala Dinas!</h2>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Total Pengaduan</h3>
                <p class="text-3xl font-bold">150</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Pengaduan Diproses</h3>
                <p class="text-3xl font-bold">80</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Pengaduan Selesai</h3>
                <p class="text-3xl font-bold">70</p>
            </div>
        </div>

        <!-- Recent Reports -->
        <h3 class="text-xl font-bold mt-8 mb-4">Laporan Terbaru</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="border p-4">No</th>
                        <th class="border p-4">Nama</th>
                        <th class="border p-4">Judul</th>
                        <th class="border p-4">Tanggal</th>
                        <th class="border p-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-4 text-center">1</td>
                        <td class="border p-4">Budi Santoso</td>
                        <td class="border p-4">Pengaduan Jalan Rusak</td>
                        <td class="border p-4">12-09-2024</td>
                        <td class="border p-4 text-center text-yellow-500">Diproses</td>
                    </tr>
                    <tr>
                        <td class="border p-4 text-center">2</td>
                        <td class="border p-4">Siti Aisyah</td>
                        <td class="border p-4">Sampah Menumpuk</td>
                        <td class="border p-4">11-09-2024</td>
                        <td class="border p-4 text-center text-green-500">Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>