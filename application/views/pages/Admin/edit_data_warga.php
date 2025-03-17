<div class="bg-white shadow-lg rounded-lg p-6 w-full">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Edit Data Warga</h2>

    <form action="<?= base_url('CAdmin/update_data_warga/' . $warga['id']); ?>" method="post" class="space-y-4">
        <input type="hidden" name="id" value="<?= $warga['id']; ?>">
        <div>
            <label for="nama_warga" class="block text-gray-700 font-medium">Nama Warga</label>
            <input type="text" id="nama_warga" name="nama_warga" value="<?= $warga['nama_warga']; ?>"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" required>
        </div>

        <div>
            <label for="nik" class="block text-gray-700 font-medium">NIK</label>
            <input type="text" id="nik" name="nik" value="<?= $warga['nik']; ?>"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" required>
        </div>

        <div>
            <label for="alamat" class="block text-gray-700 font-medium">Alamat</label>
            <textarea id="alamat" name="alamat"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" required><?= $warga['alamat']; ?></textarea>
        </div>

        <div>
            <label for="jenis_kelamin" class="block text-gray-700 font-medium">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none" required>
                <option value="Laki-laki" <?= ($warga['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?= ($warga['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </div>

        <div class="flex justify-between">
            <a href="<?= base_url('CAdmin/menu_data_warga'); ?>" class="text-blue-600 hover:underline">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>