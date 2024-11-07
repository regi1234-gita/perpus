<div class="card bg-dark d-flex justify-content-center align-items-center" style="height: 33vh;">
<div class="col-sm-12 col-xl-10">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Kategori</h6>
                            <?php
                        if(isset($_POST['submit']) ) {
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES('$kategori')");

                            if($query) {
                                echo '<script>alert("Berhasil ditambahkan.");</script>';
                            }else{
                                echo '<script>alert("Gagal, Silahkan Coba Lagi!");</script>';
                            }
                        }

                    ?>
                            <form method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kategori" class="form-control" >
                                    </div>
                                </div>
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                                <a href="?page=kategori" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
</div>