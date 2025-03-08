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

            <a href="<?= base_url('CPages/Warga') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 256 256"
                    class="fill-black group-hover:fill-black">
                    <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                </svg>
                <span id="homeText" class="hidden">Home</span>
            </a>

            <a href="<?= base_url('CWarga/menu_pengaduan') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,128v80a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h80a8,8,0,0,1,0,16H48V208H208V128a8,8,0,0,1,16,0Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Pengaduan</span>
            </a>

            <a href="<?= base_url('CWarga/menu_konsultasi') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,128v80a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h80a8,8,0,0,1,0,16H48V208H208V128a8,8,0,0,1,16,0Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Konsultasi</span>
            </a>

            <a href="<?= base_url('CWarga/menu_ikm') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,128v80a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h80a8,8,0,0,1,0,16H48V208H208V128a8,8,0,0,1,16,0Z"></path>
                </svg>
                <span id="aboutText" class="hidden">IKM</span>
            </a>

            <a href="<?= base_url('CWarga/menu_tanggapan') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,128v80a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h80a8,8,0,0,1,0,16H48V208H208V128a8,8,0,0,1,16,0Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Tanggapan</span>
            </a>

            <a href="<?= base_url('CWarga/menu_tanggapan_pengaduan') ?>" class="p-4 flex items-center space-x-4 font-semibold hover:bg-white hover:text-black group rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M229.66,58.34l-32-32a8,8,0,0,0-11.32,0l-96,96A8,8,0,0,0,88,128v32a8,8,0,0,0,8,8h32a8,8,0,0,0,5.66-2.34l96-96A8,8,0,0,0,229.66,58.34ZM124.69,152H104V131.31l64-64L188.69,88ZM200,76.69,179.31,56,192,43.31,212.69,64ZM224,128v80a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h80a8,8,0,0,1,0,16H48V208H208V128a8,8,0,0,1,16,0Z"></path>
                </svg>
                <span id="aboutText" class="hidden">Tanggapan Pengaduan</span>
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