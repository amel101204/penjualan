
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styling untuk sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 120px;
            background-color: #003C43;
            padding-top: 90px;
        }
        .sidebar-item {
            padding: 10px 20px;
            color: white;
        }
        .sidebar-item:hover {
            background-color: #135D66;
            color: white;
        }
        /* Styling untuk konten */
        .content {
            margin-left: 150px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            padding-top: 50px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="barang/barangIndex.php">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="pembelian/pembelianIndex.php">Pembelian</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="supplier/supplierIndex.php">Supplier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="penjualan/penjualanIndex.php">Penjualan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-item" href="member/memberIndex.php">Member</a>
        </li>
    <li>
        <a class="nav-link sidebar-item" href="login.html">LOG OUT</a>
    </li>
    </ul>
</div>

<!-- Content -->
<div class="content">
    <h1>Welcome to Dashboard </h1>
    <h3><span style="font-weight: bold;"></span></h3>
    <p>Have a nice day!</p>
        <!-- Menampilkan jumlah barang -->
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Keuntungan All Item</h4>
            </div>
            <div class="card-body">
              <!-- <?= $laba ?> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kerugian All Item</h4>
            </div>
            <div class="card-body">
              <!-- <?= $rugi ?> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
