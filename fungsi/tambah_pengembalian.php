<div class="card bg-dark d-flex justify-content-center align-items-center">
<div class="col-sm-12 col-xl-10">
        <div class="bg-secondary rounded h-100 p-4">
        <h1 class="mt-4">Pengembalian Buku</h1><br>
                        <form method="post">
                            <?php
                                if (isset($_POST['submit'])) {
                                    $id_buku = $_POST['id_buku'];
                                    $id_user = $_SESSION['user']['id_user'];
                                    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                                    $status_pengembalian = $_POST['status_pengembalian'];
                                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku, id_user, tanggal_pengembalian, status_peminjaman) VALUES('$id_buku', '$id_user', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_peminjaman')");

                                    if ($query) {
                                        echo '<script>alert("Berhasil ditambahkan.");</script>';
                                    }else{
                                        echo '<script>alert("Gagal, Silahkan Coba Lagi!");</script>';
                                    }
                                }
                            ?>
                            <div class="row mb-3">
                                <div class="col-md-2">Peminjam</div>
                                <div class="col-md-8">
                                    <select name="id_buku" class="form-control">
                                        <?php
                                            $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                            while ($buku = mysqli_fetch_array($buk)) {
                                                ?>
                                                <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">Tanggal Pengembalian</div>
                                <div class="col-md-8">
                                    <input type="date" class="form-control bg-white" name="tanggal_pengembalian">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">Status Peminjaman</div>
                                <div class="col-md-8">
                                    <select name="status_peminjaman" class="form-control bg-white">
                                        <option value="dipinjam">Dipinjam</option>
                                        <option value="dikembalikan">Dikembalikan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="?page=pengembalian" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
