<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjam=$id");
?>
 <script>
    alert('apakah anda yakin?');
    location.href = "index.php?page=peminjaman";
 </script>