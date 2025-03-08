<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-blue-300 to-blue-500">
	<div class="w-full max-w-2xl p-8 space-y-6 bg-white shadow-lg rounded-xl">
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

		<form action="<?= base_url('CAuth/registrasiWarga') ?>" method="POST" class="space-y-4">
			<div>
				<label for="nama_warga" class="block text-sm font-medium text-gray-700">Nama</label>
				<input type="text"
					id="nama_warga"
					name="nama_warga"
					value="<?= set_value('nama_Warga') ?>"
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<span style="color: red;"><?php echo form_error('nama_warga'); ?></span>

			</div>

			<div>
				<label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
				<input type="number"
					id="nik"
					name="nik"
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<span style="color: red;"><?php echo form_error('nik'); ?></span>
			</div>

			<div>
				<label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
				<input
					type="text"
					id="alamat"
					name="alamat"
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<span style="color: red;"><?php echo form_error('alamat'); ?></span>
			</div>

			<div>
				<label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
				<select id="jenis_kelamin" name="jenis_kelamin" required
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
					<option selected disabled>--Pilih Jenis Kelamin--</option>
					<option value="Laki Laki">Laki Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>

			<div>
				<label for="email" class="block text-sm font-medium text-gray-700">email</label>
				<input
					type="email"
					id="email"
					name="email"
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<span style="color: red;"><?php echo form_error('email'); ?></span>
			</div>

			<div>
				<label
					for="password" class="block text-sm font-medium text-gray-700">Password</label>
				<input
					type="password"
					id="password"
					name="password"
					class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
				<span style="color: red;"><?php echo form_error('password'); ?></span>
			</div>

			<button type="submit"
				class="w-full p-3 font-semibold text-white bg-gradient-to-r from-blue-500 to-blue-700 rounded-lg hover:from-blue-600 hover:to-blue-800 transition-all duration-300">Login</button>
		</form>

		<p class="text-sm text-center text-gray-600">Sudah punya akun?
			<a href="<?= base_url('CAuth') ?>" class="text-blue-600 hover:underline hover:text-blue-800 transition-all duration-300">Login</a>
		</p>
	</div>

</div>