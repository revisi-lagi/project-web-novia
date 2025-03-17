<div id="app" class="flex h-screen">
    <div class=" w-[220px] px-4 bg-[#F5F5F5] border border-black">

        <div class="mt-5 flex items-center">
            <img src="<?= base_url('assets/logo/logo-kab-tegal.png') ?>" alt="" class="w-[50px] ">
            <h1 class="font-bold ml-5">Pengaduan Konsultasi DPMPTSP</h1>
        </div>

        <div class="mt-5 flex flex-col gap-8">
            <a href="<?= base_url('CPages/KepalaDinas') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#000000" viewBox="0 0 256 256">
                    <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                </svg>
                <h1 class="font-semibold">Dashboard</h1>
            </a>

            <a href="<?= base_url('CKepalaDinas/menu_laporan_pengaduan') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path>
                </svg>
                <h1 class="font-semibold">Laporan Pengaduan</h1>
            </a>

            <a href="<?= base_url('CKepalaDinas/menu_laporan_konsultasi') ?>" class="p-2 flex items-center gap-3 rounded-lg hover:bg-slate-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path>
                </svg>
                <h1 class="font-semibold">Laporan Konsultasi</h1>
            </a>

        </div>

        <div class="relative mt-[450px] flex flex-col gap-5">
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