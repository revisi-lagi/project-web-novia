<div class="w-full h-screen px-6 overflow-y-auto bg-gray-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-white shadow-md rounded-md">
        <h1 class="text-xl font-bold text-gray-800">Konsultasi</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-red-600 hover:text-red-800 font-medium">Logout</a>
    </div>

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="bg-green-500 text-white p-3 my-4 rounded-md shadow-md">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')) : ?>
        <div class="bg-red-500 text-white p-3 my-4 rounded-md shadow-md">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?= base_url('CWarga/submit_form_konsultasi') ?>" enctype="multipart/form-data" class="w-full  mx-auto mt-5 p-6 bg-white shadow-lg rounded-md">
        <div>
            <div class="w-full p-3 bg-yellow-400 text-gray-900 font-semibold border border-gray-600 rounded-md">
                <h1 class="text-lg">Informasi Konsul</h1>
            </div>

            <div class="w-full mt-3 p-4 bg-gray-100 border border-gray-300 rounded-md">
                <div class="space-y-4">
                    <div class="flex flex-col">
                        <label for="nama" class="font-medium">Nama</label>
                        <input name="nama" type="text" class="w-full p-2 border border-gray-400 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="alamat" class="font-medium">Alamat</label>
                        <input name="alamat" type="text" class="w-full p-2 border border-gray-400 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="telepon" class="font-medium">No Hp</label>
                        <input name="telepon" type="tel" class="w-full p-2 border border-gray-400 rounded-md">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="w-full p-3 bg-blue-500 text-white font-semibold border border-gray-600 rounded-md">
                <h1 class="text-lg">Detail Konsultasi</h1>
            </div>

            <div class="w-full mt-3 p-4 bg-gray-100 border border-gray-300 rounded-md">
                <div class="space-y-4">
                    <div class="flex flex-col">
                        <label for="judul" class="font-medium">Judul Konsultasi</label>
                        <input name="judul" type="text" class="w-full p-2 border border-gray-400 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="kategori" class="font-medium">Kategori Konsultasi</label>
                        <select name="kategori" class="w-full p-2 border border-gray-400 rounded-md">
                            <option value="Nib">NIB</option>
                            <option value="Pirt">PIRT</option>
                            <option value="Imb">IMB</option>
                            <option value="Sip">SIP</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="tanggal" class="font-medium">Tanggal Konsultasi</label>
                        <input name="tanggal" type="date" class="w-full p-2 border border-gray-400 rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label for="deskripsi" class="font-medium">Deskripsi Konsultasi</label>
                        <textarea name="deskripsi" class="w-full p-2 border border-gray-400 rounded-md"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="w-full p-3 bg-green-600 text-white font-semibold border border-gray-600 rounded-md">
                <h1 class="text-lg">Bukti Pendukung</h1>
            </div>

            <div class="w-full mt-3 p-4 bg-gray-100 border border-gray-300 rounded-md">
                <div class="flex flex-col">
                    <label for="bukti" class="font-medium">Foto/Gambar</label>
                    <input name="bukti" type="file" class="w-full p-2 border border-gray-400 rounded-md">
                </div>
            </div>
        </div>

        <button class="w-full mt-5 py-3 bg-gray-700 text-white font-bold rounded-md hover:bg-gray-800 transition duration-300">
            Kirim
        </button>
    </form>
</div>
