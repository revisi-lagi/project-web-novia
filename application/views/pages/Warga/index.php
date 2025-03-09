<div class="w-full h-screen px-6 overflow-y-auto bg-gray-100">
    <div class="w-full h-[80px] mt-5 flex items-center justify-between p-4 bg-white shadow-md rounded-md">
        <h1 class="text-xl font-bold text-gray-800">Warga Dashboard</h1>
        <a href="<?= base_url('CAuth/logout') ?>" class="text-red-600 hover:text-red-800 font-medium">Logout</a>
    </div>

    <div class="w-full h-[50px] mt-8 p-3 bg-green-400 text-white font-bold border border-green-700 rounded-md shadow">
        <h1 class="text-lg">Halo, Selamat Datang!</h1>
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

    <div class="w-full mt-5 bg-white border border-gray-300 rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Informasi Terkini</h2>
        <h1>halo selamat datang <?= $this->session->userdata('id') ?></h1>
        <p class="text-gray-600">Selamat datang di portal pengaduan dan konsultasi warga. Silakan ajukan pengaduan dan konsultasi Anda melalui menu yang tersedia.</p>
    </div>
</div>