<div class="border w-full flex justify-between items-center px-44 py-1">
	<div class="">
		<h1>DINAS</h1>
		<h1 class="text-xl font-extrabold">DPMPTSP</h1>
	</div>

	<div class="flex items-center gap-10 text-sm font-medium text-gray-700">
		<a href="<?= base_url('/') ?>">Beranda</a>
		<a href="<?= base_url('CPages/tentang_kami') ?>">Tentang Kami</a>
		<a href="<?= base_url('CPages/produk_umkm') ?>">DPMPTSP</a>
		<div class="relative inline-block text-left">
			<button
				onclick="toggleDropdownBantuan()"
				class="inline-flex justify-center w-full">
				Bantuan
				<svg
					class="-mr-1 ml-2 h-5 w-5"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 20 20"
					fill="currentColor"
					aria-hidden="true">
					<path
						fill-rule="evenodd"
						d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
						clip-rule="evenodd" />
				</svg>
			</button>

			<div
				id="dropdownMenuBantuan"
				class="hidden absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
				<div
					class="py-1"
					role="menu"
					aria-orientation="vertical"
					aria-labelledby="options-menu">
					<a
						href="#"
						class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
						role="menuitem">Melakukan Pengaduan</a>
					<a
						href="#"
						class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
						role="menuitem">Melakukan Konsultasi</a>
				</div>
			</div>
		</div>
		<div class="flex items-center gap-2">
			<div class="relative inline-block text-left">
				<button
					onclick="toggleDropdownDaftar()"
					class="px-3 py-1 inline-flex justify-center w-full">
					Daftar
					<svg
						class="-mr-1 ml-2 h-5 w-5"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor"
						aria-hidden="true">
						<path
							fill-rule="evenodd"
							d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
							clip-rule="evenodd" />
					</svg>
				</button>

				<div
					id="dropdownMenuDaftar"
					class="hidden absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
					<div
						class="py-1"
						role="menu"
						aria-orientation="vertical"
						aria-labelledby="options-menu">
						<a
							href="<?= base_url('CAuth/registrasiWarga/') ?>"
							class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
							role="menuitem">Sebagai Warga </a>
						<a
							href="<?= base_url('CAuth/registrasiStafpelayanan/') ?>"
							class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
							role="menuitem">Sebagai StafPelayanan</a>
					</div>
				</div>
			</div>
			<a class="px-3 py-1 rounded-lg bg-black text-white" href="<?= base_url('CAuth') ?>">Masuk</a>
		</div>
	</div>
</div>