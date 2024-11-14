<div class="card bg-dark d-flex justify-content-center align-items-center">
</br>
<div class="col-11">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Peminjam</h6>
                            <div class="table-responsive">
                            <a href="?page=fungsi/tambah_peminjam" class="btn cur-p btn-primary">Add</a>
                            <br>
                            <br>
                            <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>User</th>
                                             <th>Buku</th>
                                             <th>Tanggal Peminjaman</th>
                                             <th>Tanggal Pengembalian</th>
                                             <th>Status Peminjaman</th>
                                             <th>Denda</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                                            <td><?php echo $data['status_peminjaman']; ?></td>
                                            <td><?php echo $data['denda']; ?></td>
                                            <td>
                                             <?php
                                                if($data['status_peminjaman'] != 'dikembalikan') {
                                                   ?>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_peminjaman&&id=<?php echo $data['id_peminjam']; ?>">Change</a>
                                                <a onclick="return confirm('apakah anda yakin?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_peminjaman&&id=<?php echo $data['id_peminjam']; ?>">Delete</a>
                                                <?php
                                                   }
                                                   ?>
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