<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!-- FontAwesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            margin: 10px auto;
            font-size: 2rem;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #0270e4;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin: 5px 0;
        }
        .sidebar a:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }

    </style>
</head>
<body>

</body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4>UD FAJAR SURYA</h4>
        <hr>
        <!-- Ikon Profil di Tengah -->
        <div class="profile-icon">
            <i class="fas fa-user"></i>
        </div>
        <p class="text-center">Admin</p>


        <hr>
        <a href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('barang') }}">
            <i class="fas fa-box"></i> Barang
        </a>
        <a href="{{ route('pesanan') }}">
            <i class="fas fa-shopping-cart"></i> Pesanan
        </a>
        <a href="{{ route('transaksi') }}">
            <i class="fas fa-money-bill"></i> Transaksi
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
