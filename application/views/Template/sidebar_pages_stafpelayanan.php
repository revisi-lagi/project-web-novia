<div id="app" class="flex h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-blue-400 text-black h-full transition-all duration-300 w-16 border-r-2 border-black" data-open="false">
        <!-- Sidebar Header -->
        <div class="p-4 flex items-center space-x-4">
            <button id="toggleSidebar" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64ZM216,96H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
                </svg>
            </button>
            <span id="sidebarTitle" class="hidden text-lg font-bold">Dashboard</span>
        </div>

        <!-- Sidebar Menu -->
        <div class="space-y-2">
            <!-- Home Menu -->

            <a href="<?= base_url('CPages/Stafpelayanan') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 256 256"
                    class="fill-black group-hover:fill-black">
                    <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                </svg>
                <span id="homeText" class="hidden">Home</span>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_laporan_pengaduan') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Kelola Pengaduan</span>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_laporan_konsultasi') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Kelola Konsultasi</span>
            </a>

            <a href="<?= base_url('CStafpelayanan/menu_ikm') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Kelola IKM</span>
            </a>
        </div>
    </div>

   <script>
    // Toggle Sidebar
    const sidebar = document.getElementById("sidebar");
    const toggleSidebar = document.getElementById("toggleSidebar");
    const sidebarTitle = document.getElementById("sidebarTitle");
    const sidebarTexts = document.querySelectorAll("#sidebar span");

    toggleSidebar.addEventListener("click", () => {
        const isOpen = sidebar.getAttribute("data-open") === "true";
        sidebar.setAttribute("data-open", !isOpen);
        sidebar.classList.toggle("w-64", !isOpen);
        sidebar.classList.toggle("w-16", isOpen);
        
        // Toggle visibility of text
        sidebarTitle.classList.toggle("hidden", isOpen);
        sidebarTexts.forEach(text => text.classList.toggle("hidden", isOpen));
    });
</script>
