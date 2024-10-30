<header class="header-absolute d-flex align-content-center">
    <div class="d-flex container justify-content-between align-items-center">
        <div class="col-6 col-sm-4">
            <a href="#">
                <img src="assets/img/nadewa-logo.png" alt="Logo Nadewa" class="logo-head img-fluid">
            </a>
        </div>

        <!-- Hamburger / Close button for mobile -->
        <button class="navbar-toggler mx-4 d-sm-none" type="button" id="menu-toggle" onclick="toggleSidebar()">
            <span id="menu-icon">&#9776;</span> <!-- Hamburger Icon -->
        </button>

        <!-- Desktop navigation -->
        <nav class="header-nav col-sm-8 my-5 d-none d-sm-flex">
            <ul class="d-flex">
                <li class="nav-item d-block px-4">
                    <a href="/" class="nav-link active" id="home" onclick="setActive('home')" style="color: #FFF;">Home</a>
                </li>
                <li class="nav-item d-block px-4">
                    <a href="/products" class="nav-link not-active" id="product" onclick="setActive('product')" style="color: #FFF;">Product</a>
                </li>
                <li class="nav-item d-block px-4">
                    <a href="/aboutus" class="nav-link not-active" id="about" onclick="setActive('about')" style="color: #FFF;">About Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Sidebar Menu for Mobile -->
<div id="sidebar" class="sidebar d-sm-none">
    <ul class="list-unstyled">
        <li class="nav-item my-2">
            <a href="/" class="nav-link active" id="home-mobile" onclick="setActive('home')">Home</a>
        </li>
        <li class="nav-item my-2">
            <a href="/products" class="nav-link not-active" id="product-mobile" onclick="setActive('product')">Product</a>
        </li>
        <li class="nav-item my-2">
            <a href="/aboutus" class="nav-link not-active" id="about-mobile" onclick="setActive('about')">About Us</a>
        </li>
    </ul>
</div>

<script>
    // Fungsi untuk menyorot tautan aktif berdasarkan localStorage
    function loadActiveLink() {
        const activeId = localStorage.getItem('activeNavLink');
        if (activeId) {
            setActive(activeId);
        }
    }

    function setActive(activeId) {
        // Simpan tautan aktif di localStorage
        localStorage.setItem('activeNavLink', activeId);

        // Update tampilan aktif di kedua versi (desktop dan mobile)
        const links = document.querySelectorAll('.nav-link');
        links.forEach(link => {
            if (link.id === activeId || link.id === activeId + '-mobile') {
                link.classList.add('active');
                link.classList.remove('not-active');
            } else {
                link.classList.remove('active');
                link.classList.add('not-active');
            }
        });

        // Tutup sidebar setelah klik tautan
        closeSidebar();
    }

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const menuIcon = document.getElementById('menu-icon');

        // Toggle sidebar
        sidebar.classList.toggle('open');

        // Toggle ikon hamburger dan X
        if (menuIcon.innerHTML === '&#9776;') {
            menuIcon.innerHTML = '&times;'; // Ubah ke "X"
        } else {
            menuIcon.innerHTML = '&#9776;'; // Ubah ke hamburger
        }
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const menuIcon = document.getElementById('menu-icon');

        // Pastikan sidebar tertutup dan ikon direset
        if (sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            menuIcon.innerHTML = '&#9776;'; // Reset ke hamburger
        }
    }

    // Panggil loadActiveLink saat halaman dimuat
    document.addEventListener("DOMContentLoaded", loadActiveLink);
</script>


<style>
    /* Custom styling for the toggler */
    .navbar-toggler {
        background: none;
        color: #fff;
        border: none;
        font-size: 2rem;
        cursor: pointer;
    }

    /* Sidebar styles */
    .sidebar {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background-color: rgb(69, 71, 191);
        color: white;
        z-index: 1000000;
        transition: 0.3s;
        padding-top: 60px;
    }

    .sidebar.open {
        left: 0;
    }

    .sidebar ul {
        padding: 0;
    }

    .sidebar .nav-item {
        padding: 10px;
        text-align: left;
    }

    .sidebar .nav-link {
        color: #555;
        font-size: 1.2rem;
        display: block;
        text-decoration: none;
    }

    .sidebar .nav-link:hover {
        border: 2px solid #fff;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 4px;
        border-radius: 20px;
        padding-bottom: 4px;
        color: #fff;
    }

    /* Hide the desktop nav on mobile screens */
    @media (max-width: 576px) {
        .header-nav {
            display: none !important;
        }

        /* Adjust the logo size for smaller screens */
        .logo-head {
            width: 100px;
        }
    }

    /* Custom styles for active and not-active states */
    .nav-link.active {
        font-weight: bold;
        color: #fff;
    }

    .nav-link.not-active {
        color: #fff;
    }
</style>