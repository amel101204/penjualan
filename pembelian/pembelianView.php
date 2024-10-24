<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Tambah Data</h2>
                <form action="pembelianController.php" method="POST">
                    <div class="form-group">
                        <label for="jumlah_pembelian">Jumlah Pembelian:</label>
                        <input type="text" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_item">Harga Beli Per Item:</label>
                        <input type="text" class="form-control" id="harga_item" name="harga_item">
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total Harga:</label>
                        <input type="text" class="form-control" id="total_harga" name="total_harga" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang:</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier:</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                    </div>
                    <div class="form-group">
                        <label for="admin_gudang">Admin Gudang (Buyer):</label>
                        <input type="text" class="form-control" id="admin_gudang" name="admin_gudang" required>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class ="col-auto">
                            <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
