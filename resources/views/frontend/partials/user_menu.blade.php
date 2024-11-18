<style>
    /* Styling Umum */
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .user-dashboard {
        display: flex;
        flex-direction: column; /* Elemen berurutan vertikal */
        width: 100%;
        height: 35vh; /* Tinggi penuh layar */
    }

    /* Header Styling */
    .dashboard-header {
        background-color: #FF8300;
        color: white;
        text-align: center;
        padding: 20px;
    }

    .dashboard-header h2 {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
    }

    .dashboard-header p {
        margin: 5px 0;
        font-size: 14px;
    }

    .user-point {
        background-color: #FDE4CF;
        padding: 10px;
        display: inline-block;
        border-radius: 5px;
        color: #FF8300;
        margin-top: 10px;
    }

    /* Navigation Tabs */
    .dashboard-tabs {
        display: flex;
        justify-content: center;
        background-color: white;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        width: 100%;
    }

    .dashboard-tabs .nav-item {
        margin: 0 10px;
    }

    .dashboard-tabs .nav-link {
        color: #000;
        font-size: 16px;
        padding: 10px 20px;
        border: none;
        text-align: center;
    }

    .dashboard-tabs .nav-link.active {
        border-bottom: 3px solid #FF8300;
        font-weight: bold;
        color: #FF8300;
    }

    .dashboard-tabs .nav-link:hover {
        text-decoration: none;
        color: #FF8300;
    }

    /* Konten Utama */
    .dashboard-content {
        flex: 0; /* Isi seluruh ruang yang tersisa */
        padding: 20px;
        background-color: #f9f9f9;
        overflow-y: auto; /* Scroll jika konten terlalu panjang */
    }

    .dashboard-content h3 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Tabel untuk wishlist */
    .dashboard-content table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
    }

    .dashboard-content table th,
    .dashboard-content table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .dashboard-content table th {
        background-color: #f8f8f8;
        font-weight: bold;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-tabs {
            flex-wrap: wrap; /* Tampilkan tab secara bertumpuk di layar kecil */
        }

        .dashboard-tabs .nav-link {
            font-size: 14px;
        }
    }
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

<div class="user-dashboard">
    <!-- Header Section -->
    <div class="dashboard-header" style="background-color: #FF8300;   margin-top: -100px; width: 100%; padding: 20px; color: white; text-align: center;">
	<h2 class="user-name" style="margin: 0;">
        {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
    </h2>
	<p class="user-email" style="margin: 5px 0;">
        {{ auth()->user()->email }}
    </p>
        <div class="user-point" style="background-color: #FDE4CF; padding: 10px; display: inline-block; border-radius: 5px; color: #FF8300;">
            <strong>Poin Saya</strong>
            <p style="margin: 0;">IDR 0.00</p>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="dashboard-tabs" style="background-color: white;   width: 100%; padding: 10px 0; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);">
        <ul class="nav nav-tabs justify-content-center" style="border-bottom: none; margin: 0; padding: 0;">
            <li class="nav-item" style="margin-right: 20px;">
                <a class="nav-link {{ request()->is('orders') ? 'active' : '' }}" href="{{ url('orders') }}" style="color: #FF8300;">
                    <i class="fas fa-shopping-bag"></i> Pesanan Saya
                </a>
            </li>
            <li class="nav-item" style="margin-right: 20px;">
                <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ url('profile') }}">
                    <i class="fas fa-user"></i> Informasi Akun
                </a>
            </li>
            <li class="nav-item" style="margin-right: 20px;">
                <a class="nav-link {{ request()->is('wishlist') ? 'active' : '' }}" href="{{ url('wishlists') }}">
                    <i class="fas fa-heart"></i> Wish List
                </a>
            </li>
        </ul>
    </div>
</div>
