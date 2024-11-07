<div class="card bg-dark d-flex justify-content-center align-items-center" >
<div class="col-11">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Ulasan</h6>
                            <div class="table-responsive">
                            <a href="?page=fungsi/tambah_ulasan" class="btn cur-p btn-primary">Add</a>
                            <br>
                              <br>
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered table-striped">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>User</th>
                                             <th>Buku</th>
                                             <th>Ulasan</th>
                                             <th>Rating</th>
                                             <th>Aksi</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                            <?php
                                            $i =1;
                                                $query = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                                                while($data = mysqli_fetch_array($query)) {
                                                    ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['ulasan']; ?></td>
                                            <td><?php echo $data['rating']; ?></td>
                                            <td>
                                                <a class="btn cur-p btn-secondary" href="?page=fungsi/ubah_ulasan&&id=<?php echo $data['id_ulasan']; ?>">Change</a>
                                                <a onclick="return confirm('apakah anda yakin?')" class="btn cur-p btn-danger" href="?page=fungsi/hapus_ulasan&&id=<?php echo $data['id_ulasan']; ?>">Delete</a>
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
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>