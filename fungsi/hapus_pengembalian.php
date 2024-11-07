<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pengembalian WHERE id_pengembalian=$id");
?>
 <script>
    alert('apakah anda yakin?');
    location.href = "index.php?page=pengembalian";
 </script>