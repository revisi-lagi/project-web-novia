<div class="min-h-screen flex flex-col justify-center items-center">
	<div
		class="w-[1200px] h-[700px] p-3 flex items-center bg-[#e9e9e9] border border-black shadow-xl rounded-xl">
		<div class="w-[60%]">
			<img src="<?= base_url('assets/background/bg-login.png') ?>" alt="" />
		</div>

		<div
			class="w-[40%] h-full flex flex-col items-center justify-center bg-white border border-black shadow-xl rounded-xl">

			<div class="w-[350px] flex flex-col items-start">
				<h1 class="text-xl text-center font-semibold">Halo, Selamat Datang</h1>
				<p class="text-xs">Masukin data kamu dengan benar yaaa</p>
			</div>


			<form action="<?= base_url('CAuth/registrasiStafpelayanan') ?>" method="POST" class="w-[350px] mt-5">
				<div class="w-full">
					<input
						type="text"
						placeholder="Nama"
						name="nama_stafpelayanan"
						value="<?php echo set_value('nama_stafpelayanan'); ?>"
						class="w-full p-1 border-b border-black" />
					<span style="color: red;"><?php echo form_error('nama_stafpelayanan'); ?></span>
				</div>

				<div class="w-full mt-5">
					<input
						type="text"
						placeholder="NIK"
						name="nik"
						value="<?php echo set_value('nik'); ?>"
						class="w-full p-1 border-b border-black" />
					<span style="color: red;"><?php echo form_error('nik'); ?></span>
				</div>

				<div class="w-full mt-5">
					<input
						type="text"
						placeholder="Alamat"
						name="alamat"
						value="<?php echo set_value('alamat'); ?>"
						class="w-full p-1 border-b border-black" />
					<span style="color: red;"><?php echo form_error('alamat'); ?></span>
				</div>

				<div class="w-full mt-5">
					<select name="jenis_kelamin" id="" value="<?php echo set_value('jenis_kelamin'); ?>" class="w-full border-b border-black">
						<option disabled selected hidden>Jenis Kelamin</option>
						<option value="Laki Laki">Laki Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
					<span style="color: red;"><?php echo form_error('jenis_kelamin'); ?></span>
				</div>

				<div class="w-full mt-5">
					<input
						type="text"
						placeholder="Email"
						name="email"
						value="<?php echo set_value('email'); ?>"
						class="w-full p-1 border-b border-black" />
					<span style="color: red;"><?php echo form_error('email'); ?></span>
				</div>

				<div class="w-full mt-5">
					<input
						type="password"
						placeholder="Password"
						name="password"
						value="<?php echo set_value('password'); ?>"
						class="w-full p-1 border-b border-black" />
					<span style="color: red;"><?php echo form_error('password'); ?></span>
				</div>

				<button
					type="submit"
					class="w-full mt-10 px-2 py-1 text-sm text-white bg-black rounded-md">
					Registrasi
				</button>

				<p class="mt-5 text-sm">udah punya akun? <a href="<?= base_url('Cauth') ?>" class="font-semibold">login</a> </p>
			</form>
		</div>
	</div>

	<div class="flex justify-center mt-10">
		<p class="tex-xs">&copy; 2025 Novia & Kiran All Right Reserved</p>
	</div>

</div>