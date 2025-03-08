<div class="w-full h-screen px-6 overflow-y-auto bg-blue-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-blue-600 text-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold">Warga Dashboard</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-white hover:text-gray-200 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-8 p-3 bg-blue-400 text-white font-bold border border-blue-700 rounded-md shadow">
        <h1 class="text-lg">Laporan Tanggapan Warga</h1>
    </div>

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
                    <th class="px-4 py-3">Nama Pelapor</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Deskripsi</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Bukti</th>
                    <th class="px-4 py-3">Tanggapan</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php if (!empty($konsultasi)): ?>
                    <?php foreach ($konsultasi as $key => $item): ?>
                        <tr class="border-t border-gray-300">
                            <td class="px-4 py-3 text-center"><?= $key + 1 ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['nama']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['tanggal']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($item['kategori']) ?></td>
                            <td class="px-4 py-3 truncate max-w-[150px]"><?= htmlspecialchars($item['deskripsi']) ?></td>
                            <td class="px-4 py-3 text-center font-bold text-blue-600">
                                <?= htmlspecialchars($item['status']) ?>
                            </td>
                            <td class="px-4 py-3">
                                <?php if (!empty($item['bukti'])): ?>
                                    <a href="<?= base_url('assets/uploads/' . $item['bukti']) ?>" target="_blank">
                                        <img src="<?= base_url('assets/uploads/' . $item['bukti']) ?>" alt="Bukti" class="w-32 h-32 object-cover hover:scale-110 transition">
                                    </a>
                                <?php else: ?>
                                    <span class="text-gray-500">Tidak ada bukti</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3">
                                <?php if (!empty($item['tanggapan'])): ?>
                                    <p class="text-gray-700" style="width: 200px;"><?= htmlspecialchars($item['tanggapan']) ?></p>
                                <?php else: ?>
                                    <p class="text-center"> - Belum Diproses - </p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center py-4">Tidak ada tanggapan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
