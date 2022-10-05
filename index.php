<?php include "header.php";?>
<h1>Pruduk</h1>


<a href="./formProduk.php" class="btn btn-primary rounded-pill mb-3">
Tambah Data
</a>
<?php 
$sql ='SELECT nama FROM produk;';
$total = mysqli_query($connect, $sql);
$jumlah_barang = mysqli_num_rows($total);
?>
<span> Terdapat <?php echo($jumlah_barang)?> produk</span>
<table class="table">
    <thead class="table-primary">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql ='SELECT * FROM produk ORDER BY harga DESC';
        $query = mysqli_query($connect,$sql);
        $i =1;
        while ($row = mysqli_fetch_object($query)) {
        ?>
        <tr>
            <td> <?php echo $i++,"."?></td>
            <td> <?php echo $row->nama;?> </td>
            <td> <?php echo "Rp.", $row->harga;?> </td>
        </tr>
        <?php }?>
    </tbody>
</table>

<?php include "footer.php";?>