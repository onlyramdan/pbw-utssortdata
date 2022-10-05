<?php include "header.php";?>
<h1>Form Produk</h1>
<form method='post' action="saveProduk.php">
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name="nama" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success rounded-pill" value="Simpan">
    </div>
</form>
<?php include "footer.php";?>