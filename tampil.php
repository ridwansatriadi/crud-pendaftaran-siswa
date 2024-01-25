<?php
include("koneksi.php");

?>

<html>

<head>
    <title>CRUD PBO PHP</title>
</head>

<body>
    <table border="1">
        <tr>
        <tr>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>

            <?php
            // koneksi ke tb
            $data = mysqli_query($koneksi, " SELECT * FROM tb_barang");
            // display data
            // looping
            // echo "".$a."";
            while ($dat = mysqli_fetch_array($data)) {
                ?>
            </tr>
            <td>
                <?php echo $dat['nama']; ?>
            </td>
            <td>
                <?php echo $dat['stok']; ?>
            </td>
            <td>
                <?php echo $dat['harga_beli']; ?>
            </td>
            <td>
                <?php echo $dat['harga_jual']; ?>
            </td>
            </tr>

            <?php
            }
            ?>
    </table>

</body>

</html>