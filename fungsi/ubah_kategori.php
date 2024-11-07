<div class="card bg-dark d-flex justify-content-center align-items-center" style="height: 33vh;">
<div class="col-sm-12 col-xl-10">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Kategori</h6>
                            <?php
                        $id = $_GET['id'];
                        if(isset($_POST['submit']) ) {
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id");

                            if($query) {
                                echo '<script>alert("Ubah data berhasil."); location.href="?page=kategori";</script>';
                            }else{
                                echo '<script>alert("Ubah data gagal!");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$id");
                        $data = mysqli_fetch_array($query);

                    ?>
                            <form method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $data['kategori']; ?>" name="kategori" class="form-control" >
                                    </div>
                                </div>
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Change</button>
                                <a href="?page=kategori" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
</div>