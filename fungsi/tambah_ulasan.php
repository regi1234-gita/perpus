<div class="card bg-dark d-flex justify-content-center align-items-center" style="height: 40vh;">
<div class="col-sm-12 col-xl-10">
        <div class="bg-secondary rounded h-100 p-4">
               <h1 class="mt-4">Tambah Ulasan</h1><br>
                <form method="post">
                    <?php
                        if(isset($_POST['submit']) ) {
                            $id_buku = $_POST['id_buku'];
                            $id_user = $_SESSION['user']['id_user'];
                            $ulasan = $_POST['ulasan'];
                            $rating = $_POST['rating'];
                            $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) VALUES('$id_buku', '$id_user', '$ulasan', '$rating')");

                            if($query) {
                                echo '<script>alert("Berhasil ditambahkan.");</script>';
                            }else{
                                echo '<script>alert("Gagal, Silahkan Coba Lagi!");</script>';
                            }
                        }

                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                    $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                    while($buku = mysqli_fetch_array($buk)) {
                                        ?>
                                        <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8"><textarea name="ulasan" rows="5" class="form-control"></textarea></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                            <select name="rating" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=ulasan" class="btn btn-danger">Back</a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>