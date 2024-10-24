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
                <form action="penjualanController.php?action=" method="POST">
                    <div class="form-group">
                        <label for="jumlah_penjualan">Jumlah Penjualan:</label>
                        <input type="text" class="form-control" id="jumlah_penjualan" name="jumlah_penjualan" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual:</label>
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual">
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
                        <label for="nama_pelanggan">Nama Pelanggan:</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="kasir">Kasir:</label>
                        <input type="text" class="form-control" id="kasir" name="kasir" required>
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
