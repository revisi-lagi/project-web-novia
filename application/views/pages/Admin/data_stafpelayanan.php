<div class="w-full h-screen px-6 overflow-y-auto bg-blue-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-blue-600 text-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold">Admin Pages</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-white hover:text-gray-200 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-10 p-3 bg-[#08aa13] border-2 border-black rounded-lg">
        <h1 class="text-lg text-white font-bold">Data Akun Staf Pelayanan</h1>
    </div>

    <div class="my-5">
        <a href="<?= base_url('CAdmin/create_staff_pelayanan') ?>" class="px-3 py-1 text-white font-semibold bg-[#08aa13] border-2 border-black rounded-md">Tambah Staff</a>
    </div>


    <div class="w-full h-[600px] mt-2 overflow-y-auto bg-white border-2 border-black rounded-lg">
        <table class="min-w-full border border-black">
            <thead>
                <tr class="bg-gray-100 border-b border-black">
                    <td class="text-left px-3 py-4 text-sm font-bold">#</td>
                    <td class="text-left px-3 py-4 text-sm font-bold">Nama</td>
                    <td class="text-left px-3 py-4 text-sm font-bold">NIK</td>
                    <td class="text-left px-3 py-4 text-sm font-bold">Alamat</td>
                    <td class="text-left px-3 py-4 text-sm font-bold">Jenis Kelamin</td>
                    <td class="text-left px-3 py-4 text-sm font-bold">Aksi</td>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($data_stafpelayanan)): ?>
                    <?php foreach ($data_stafpelayanan as $index => $user): ?>
                        <tr class="border-b border-black">
                            <td class="px-3 py-4 text-sm"><?= $index + 1; ?></td>

                            <!-- Tampilkan Data atau Input Edit -->
                            <td id="nama_<?= $user['id']; ?>"><?= htmlspecialchars($user['nama_stafpelayanan']); ?></td>
                            <td id="nik_<?= $user['id']; ?>"><?= htmlspecialchars($user['nik']); ?></td>
                            <td id="alamat_<?= $user['id']; ?>"><?= htmlspecialchars($user['alamat']); ?></td>
                            <td id="jenis_kelamin_<?= $user['id']; ?>"><?= htmlspecialchars($user['jenis_kelamin']); ?></td>

                            <td class="flex space-x-2">
                                <button id="edit_btn_<?= $user['id']; ?>" onclick="editRow(<?= $user['id']; ?>)"
                                    class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">
                                    Edit
                                </button>

                                <button id="save_btn_<?= $user['id']; ?>" onclick="saveRow(<?= $user['id']; ?>)"
                                    class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 hidden ">
                                    Simpan
                                </button>

                                <a href="<?= base_url('CAdmin/hapus_data_stafpelayanan/' . $user['id']); ?>"
                                    class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600"
                                    onclick="return confirm('Yakin ingin menghapus data staf ini?');">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center py-4">Tidak ada data staf</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function editRow(id) {
        let nama = document.getElementById("nama_" + id);
        let nik = document.getElementById("nik_" + id);
        let alamat = document.getElementById("alamat_" + id);
        let jenisKelamin = document.getElementById("jenis_kelamin_" + id);

        nama.innerHTML = `<input type="text" id="edit_nama_${id}" value="${nama.innerText}" class="border px-2 py-1 w-full">`;
        nik.innerHTML = `<input type="text" id="edit_nik_${id}" value="${nik.innerText}" class="border px-2 py-1 w-full">`;
        alamat.innerHTML = `<input type="text" id="edit_alamat_${id}" value="${alamat.innerText}" class="border px-2 py-1 w-full">`;
        jenisKelamin.innerHTML = `
            <select id="edit_jenis_kelamin_${id}" class="border px-2 py-1 w-full">
                <option value="Laki-laki" ${jenisKelamin.innerText === 'Laki-laki' ? 'selected' : ''}>Laki-laki</option>
                <option value="Perempuan" ${jenisKelamin.innerText === 'Perempuan' ? 'selected' : ''}>Perempuan</option>
            </select>`;

        // Tampilkan tombol "Simpan" dan sembunyikan tombol "Edit"
        document.getElementById("edit_btn_" + id).classList.add("hidden");
        document.getElementById("save_btn_" + id).classList.remove("hidden");
    }

    function saveRow(id) {
        if (!confirm("Yakin ingin menyimpan perubahan data warga ini?")) {
            return; // Batalkan jika pengguna memilih "Batal"
        }

        let namaInput = document.getElementById("edit_nama_" + id).value;
        let nikInput = document.getElementById("edit_nik_" + id).value;
        let alamatInput = document.getElementById("edit_alamat_" + id).value;
        let jenisKelaminInput = document.getElementById("edit_jenis_kelamin_" + id).value;

        fetch("<?= base_url('CAdmin/update_data_warga') ?>", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `id=${id}&nama_warga=${namaInput}&nik=${nikInput}&alamat=${alamatInput}&jenis_kelamin=${jenisKelaminInput}`
            }).then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert("Data berhasil diperbarui!");

                    // Kembalikan tampilan teks setelah disimpan tanpa reload
                    document.getElementById("nama_" + id).innerHTML = namaInput;
                    document.getElementById("nik_" + id).innerHTML = nikInput;
                    document.getElementById("alamat_" + id).innerHTML = alamatInput;
                    document.getElementById("jenis_kelamin_" + id).innerHTML = jenisKelaminInput;

                    // Tampilkan kembali tombol "Edit" dan sembunyikan tombol "Simpan"
                    document.getElementById("edit_btn_" + id).classList.remove("hidden");
                    document.getElementById("save_btn_" + id).classList.add("hidden");
                } else {
                    alert("Gagal memperbarui data.");
                }
            }).catch(error => console.error("Error:", error));
    }
</script>