<div class="card bg-dark d-flex justify-content-center align-items-center" >
<div class="col-11">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Buku</h6>
                            <div class="table-responsive">
                            <a href="?page=fungsi/tambah_buku" class="btn cur-p btn-primary">Add</a>
                            <br>
                            <br>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Penulis</th>
                                            <th scope="col">Penerbit</th>
                                            <th scope="col">Tahun Terbit</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                         $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['penulis']; ?></td>
                                            <td><?php echo $data['penerbit']; ?></td>
                                            <td><?php echo $data['tahun_terbit']; ?></td>
                                            <td><?php echo $data['deskripsi']; ?></td>
                                            <td>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_buku&&id=<?php echo $data['id_buku']; ?>">Change</a>
                                                <a onclick="return confirm('apakah anda yakin?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_buku&&id=<?php echo $data['id_buku']; ?>">Delete</a>
                                            </td>
                                          </tr>
                                          <?php
                                                }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>