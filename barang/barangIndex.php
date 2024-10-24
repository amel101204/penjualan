<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
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
            margin-left: 150px;
            /* Sesuaikan dengan lebar sidebar */
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
                <a class="nav-link sidebar-item" href="../dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-item" href="barangIndex.php">Barang</a>
            </li>
           
                <li class="nav-item">
                    <a class="nav-link sidebar-item" href="../pembelian/pembelianIndex.php">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-item" href="../supplier/supplierIndex.php">Supplier</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link sidebar-item" href="../penjualan/penjualanIndex.php?roleCode=<?= $roleCode; ?>&roleName=<?= $roleName; ?>">Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-item" href="../member/memberIndex.php?roleCode=<?= $roleCode; ?>&roleName=<?= $roleName; ?>">Member</a>
                </li>
           
                <li>
                    <a class="nav-link sidebar-item" href="../Login.html?">LOG OUT</a>
                </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <h1> Data Barang </h1>
        <div class="container-fluid">
        <div class="row mb-2 float-right">
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="addNewItem()">Add</button>
            </div>
        </div>
        <div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" onclick="sortTable('nama_barang')" style="cursor: pointer;">Nama Barang</th>
                    <th scope="col" onclick="sortTable('keterangan')" style="cursor: pointer;">Keterangan</th>
                    <th scope="col" onclick="sortTable('satuan')" style="cursor: pointer;">Satuan</th>
                    <th scope="col" onclick="sortTable('harga')" style="cursor: pointer;">Harga</th>
                    <th scope="col" onclick="sortTable('stock')" style="cursor: pointer;">Stock</th>
                    <th scope="col">Aksi</th> 
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <!-- Tombol Delete -->
                            <a href="barangController.php" class="btn btn-danger btn-sm" onclick="return confirmAction('delete')">Delete</a>
                            <!-- Tombol Edit -->
                            <a href="barangView.php" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                
            </tbody>
        </table>
        <script>
        function addNewItem() {
        
        window.location.href = "barangView.php";
    }

    function confirmAction(action) {
        if (action === 'delete') {
            return confirm('Are you sure you want to delete this item?');
        } 
        return false;
    }
        </script>

            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" >Previous</a>
                    </li>
                    
                        <li class="page-item"><a class="page-link">></a></li>
                    
                    <li class="page-item">
                        <a class="page-link" >Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>