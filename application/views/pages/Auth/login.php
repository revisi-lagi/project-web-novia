<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-blue-300 to-blue-500">
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-xl">
        <h2 class="text-3xl font-bold text-center text-blue-700">Login</h2>

        <!-- Pesan Error -->
        <div class="w-[300px] flex flex-col justify-start mt-5">
            <?php if ($this->session->flashdata('message', 'error')) : ?>
                <p class="text-red-600 bg-red-100 p-2 rounded-md"><?= $this->session->flashdata('message', 'error'); ?></p>
            <?php endif; ?>
        </div>

        <div class="w-[300px] flex flex-col justify-start mt-5">
            <?php if ($this->session->flashdata('error')) : ?>
                <p class="text-red-600 bg-red-100 p-2 rounded-md"><?= $this->session->flashdata('error'); ?></p>
            <?php endif; ?>
        </div>

        <form action="<?= base_url('CAuth') ?>" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="w-full p-3 font-semibold text-white bg-gradient-to-r from-blue-500 to-blue-700 rounded-lg hover:from-blue-600 hover:to-blue-800 transition-all duration-300">Login</button>
        </form>

        <p class="text-sm text-center text-gray-600">Belum punya akun?
            <a href="<?= base_url('CAuth/registrasiWarga') ?>" class="text-blue-600 hover:underline hover:text-blue-800 transition-all duration-300">Daftar</a>
        </p>
    </div>
</div>