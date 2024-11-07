<div class="card bg-dark d-flex justify-content-center align-items-center" >
<div class="col-11">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Kategori</h6>
                            <div class="table-responsive">
                            <a href="?page=fungsi/tambah_kategori" class="btn cur-p btn-primary">Add</a>
                            <br>
                            <br>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['kategori']; ?></td>
                                            <td>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_kategori&&id=<?php echo $data['id_kategori']; ?>">Change</a>
                                                <a onclick="return confirm('apakah anda yakin?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_kategori&&id=<?php echo $data['id_kategori']; ?>">Delete</a>
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