<div class="w-full h-screen px-6 overflow-y-auto bg-blue-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-blue-600 text-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold">Kepala Dinas Dashboard</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-white hover:text-gray-200 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-8 p-3 bg-blue-400 text-white font-bold border border-blue-700 rounded-md shadow">
        <h1 class="text-lg">Laporan Pengaduan Warga</h1>
    </div>

    <a href="<?= base_url('CPDF/generate_laporan_pengaduan') ?>">
        <div class="w-[120px] mt-5 p-1 flex gap-3 text-white bg-red-500 border border-black rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff" viewBox="0 0 256 256">
                <path d="M214.67,72H200V40a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8V72H41.33C27.36,72,16,82.77,16,96v80a8,8,0,0,0,8,8H56v32a8,8,0,0,0,8,8H192a8,8,0,0,0,8-8V184h32a8,8,0,0,0,8-8V96C240,82.77,228.64,72,214.67,72ZM72,48H184V72H72ZM184,208H72V160H184Zm40-40H200V152a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v16H32V96c0-4.41,4.19-8,9.33-8H214.67c5.14,0,9.33,3.59,9.33,8Zm-24-52a12,12,0,1,1-12-12A12,12,0,0,1,200,116Z"></path>
            </svg>
            <p>Cetak Pdf</p>
        </div>
    </a>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="bg-green-500 text-white p-3 my-4 rounded-md shadow">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')) : ?>
        <div class="bg-red-500 text-white p-3 my-4 rounded-md shadow">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <div class="w-full mt-5 overflow-x-auto bg-white border border-gray-300 rounded-lg shadow-lg">
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Nama </th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Telpon</th>
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Deskripsi</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3">Bukti</th>
                    <th class="px-4 py-3">status</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php if (!empty($konsultasi)): ?>
                    <?php foreach ($konsultasi as $key => $item): ?>
                        <tr class="border-t border-gray-300">
                            <td class="px-4 py-3 text-center"><?= $key + 1 ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['nama']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['alamat']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['telepon']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['judul']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['kategori']) ?></td>
                            <td class="px-4 py-3" style="width:200px;"><?= htmlspecialchars($item['deskripsi']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['tanggal']) ?></td>
                            <td class="px-4 py-3">
                                <?php if (!empty($item['bukti'])): ?>
                                    <a href="<?= base_url('assets/uploads/' . $item['bukti']) ?>" target="_blank">
                                        <img src="<?= base_url('assets/uploads/' . $item['bukti']) ?>" alt="Bukti" class="w-32 h-32 object-cover hover:scale-110 transition">
                                    </a>
                                <?php else: ?>
                                    <span class="text-gray-500">Tidak ada bukti</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['status']) ?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center py-4">Tidak ada data konsultasi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>