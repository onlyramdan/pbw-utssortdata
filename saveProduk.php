<?php include 'connect.php';

$nama = $_POST['nama'];
$harga = $_POST ['harga'];

$sql = 'INSERT INTO produk VALUES("' . $nama . '","' . $harga . '")';

$result = mysqli_query($connect, $sql);


if($result){
    header('Location: index.php');
}else{
    echo 'Insert Failed';
}
?>
    