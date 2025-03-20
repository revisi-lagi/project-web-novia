<div class="w-full h-screen px-6 overflow-y-auto bg-blue-50">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-blue-600 text-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold">Admin Pages</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-white hover:text-gray-200 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-10 p-3 bg-[#08aa13] border-2 border-black rounded-lg">
        <h1 class="text-lg text-white font-bold">Data Akun Staf Pelayanan</h1>
    </div>

    <div>
        <form action="<?php echo base_url('CAdmin/tambah_staff_pelayanan'); ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nama Staf Pelayanan</label>
                <input type="text" name="nama_stafpelayanan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">NIK</label>
                <input type="number" name="nik" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Alamat</label>
                <textarea name="alamat" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Jenis Kelamin</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="mr-2" required /> Laki-laki
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="mr-2" required /> Perempuan
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Kirim</button>
        </form>
    </div>

</div>