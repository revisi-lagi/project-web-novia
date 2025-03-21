<div id="app" class="flex h-screen">
    <div class="w-[220px] px-4 bg-[#F5F5F5] border border-black">

        <div class="mt-5 flex items-center">
            <img src="<?= base_url('assets/logo/logo-kab-tegal.png') ?>" alt="" class="w-[50px] ">
            <h1 class="font-bold ml-5">Pengaduan Konsultasi DPMPTSP</h1>
        </div>
        <div class="mt-5 flex flex-col gap-8">
            <a href="<?= base_url('CPages/Stafpelayanan') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#000000" viewBox="0 0 256 256">
                    <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                </svg>
                <h1 class="font-semibold">Dashboard</h1>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_laporan_pengaduan') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#000000" viewBox="0 0 256 256">
                    <path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V48a8,8,0,0,1,16,0v94.37L90.73,98a8,8,0,0,1,10.07-.38l58.81,44.11L218.73,90a8,8,0,1,1,10.54,12l-64,56a8,8,0,0,1-10.07.38L96.39,114.29,40,163.63V200H224A8,8,0,0,1,232,208Z"></path>
                </svg>
                <h1 class="font-semibold">Kelola Pengaduan</h1>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_laporan_konsultasi') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,66.34l-40-40A8,8,0,0,0,168,24H88A16,16,0,0,0,72,40V56H56A16,16,0,0,0,40,72V216a16,16,0,0,0,16,16H168a16,16,0,0,0,16-16V200h16a16,16,0,0,0,16-16V72A8,8,0,0,0,213.66,66.34ZM168,216H56V72h76.69L168,107.31v84.53c0,.06,0,.11,0,.16s0,.1,0,.16V216Zm32-32H184V104a8,8,0,0,0-2.34-5.66l-40-40A8,8,0,0,0,136,56H88V40h76.69L200,75.31Zm-56-32a8,8,0,0,1-8,8H88a8,8,0,0,1,0-16h48A8,8,0,0,1,144,152Zm0,32a8,8,0,0,1-8,8H88a8,8,0,0,1,0-16h48A8,8,0,0,1,144,184Z"></path>
                </svg>
                <h1 class="font-semibold">Kelola Konsultasi</h1>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_ikm') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns=" http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
                </svg>
                <h1 class="font-semibold">Kelola IKM</h1>
            </a>

        </div>

        <div class="mt-[250px] flex flex-col gap-5">

            <a href="" class="flex item-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path>
                </svg>
                <h1 class="">Bantuan</h1>
            </a>

            <a href="<?= base_url('CAuth/logout') ?>" class="flex item-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
                    <path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path>
                </svg>
                <h1>Logout</h1>
            </a>

        </div>

    </div>