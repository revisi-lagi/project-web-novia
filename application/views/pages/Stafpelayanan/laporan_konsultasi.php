<div class="w-full h-screen px-6 overflow-y-auto bg-blue-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-blue-600 text-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold">Staf Dashboard</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-white hover:text-gray-200 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-8 p-3 bg-blue-400 text-white font-bold border border-blue-700 rounded-md shadow">
        <h1 class="text-lg">Laporan Konsultasi Warga</h1>
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
                            <td class="px-4 py-3" style="width:200px;"><?= htmlspecialchars($item['deskripsi']) ?></td>
                            <td class="px-4 py-3">
                                <form method="post" action="<?= base_url('CStafpelayanan/update_status_form_konsultasi') ?>" class="flex items-center gap-2">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <select name="status" class="border rounded px-2 py-1 text-gray-700">
                                        <option value="Pending" <?= $item['status'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Proses" <?= $item['status'] === 'Proses' ? 'selected' : '' ?>>Proses</option>
                                        <option value="Selesai" <?= $item['status'] === 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                                    </select>
                                    <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">
                                        ✔
                                    </button>
                                </form>
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
                                    <div id="view-mode-<?= $item['id'] ?>" class="flex items-center justify-between">
                                        <p class="text-gray-700"><?= htmlspecialchars($item['tanggapan']) ?></p>
                                        <button onclick="toggleEditMode(<?= $item['id'] ?>)" class="ml-2 text-blue-500 hover:text-blue-700">
                                            ✏️
                                        </button>
                                    </div>

                                    <!-- Form Edit -->
                                    <form id="edit-mode-<?= $item['id'] ?>" method="post" action="<?= base_url('CStafpelayanan/edit_tanggapan_konsultasi') ?>" class="hidden">
                                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                        <textarea name="tanggapan" rows="2" class="border rounded w-full p-2"><?= htmlspecialchars($item['tanggapan']) ?></textarea>
                                        <div class="flex gap-2 mt-2">
                                            <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Simpan</button>
                                            <button type="button" onclick="toggleEditMode(<?= $item['id'] ?>)" class="bg-gray-500 text-white px-3 py-1 rounded-md hover:bg-gray-600">Batal</button>
                                        </div>
                                        <script>
                                            function toggleEditMode(id) {
                                                let viewMode = document.getElementById(`view-mode-${id}`);
                                                let editMode = document.getElementById(`edit-mode-${id}`);

                                                if (viewMode.style.display === "none") {
                                                    viewMode.style.display = "flex";
                                                    editMode.style.display = "none";
                                                } else {
                                                    viewMode.style.display = "none";
                                                    editMode.style.display = "block";
                                                }
                                            }
                                            </script>
                                    </form>

                                <?php else: ?>
                                    <!-- Form Tanggapan Baru -->
                                    <form method="post" action="<?= base_url('CStafpelayanan/tanggapi_konsultasi') ?>">
                                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                        <textarea name="tanggapan" rows="2" class="border rounded w-full p-2" placeholder="Masukkan tanggapan..." required></textarea>
                                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 mt-2">Kirim</button>
                                    </form>
                                <?php endif; ?>
                            </td>


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
