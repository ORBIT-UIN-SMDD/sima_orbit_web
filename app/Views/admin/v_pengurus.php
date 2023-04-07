<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Data Pengurus ORBIT</h5>
                <!-- <a href="#" data-bs-target="#backDropModal" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah User
                </a> -->
                <a href="/pengurus/tambah" type="button" class="btn btn-primary">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Pengurus
                </a>

            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>jenis Kelamin</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($pengurus as $item) : ?>
                            <tr>
                                <td><?= $item["nim"] ?></td>
                                <td><?= $item["nama"] ?></td>
                                <td><?= $item["jenis_kelamin"] == 0 ? "Perempuan" : "Laki-Laki" ?></td>
                                <td><?= $item["email"] ?></td>
                                <td><?= $item["no_telp"] ?> </td>
                                <td> <?= $item["active"] == 0 ? '<span class="badge bg-label-warning me-1">Tidak Aktif</span>' : '<span class="badge bg-label-success me-1">Aktif</span>' ?> </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#largeModal<?= $item["nim"] ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bxs-edit'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary" href="/pengurus/delete/<?= $item["nim"] ?>">
                                            <i class='tf-icons bx bx-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- MODAL FOR DELETE -->
                            <!-- <div class="modal fade show" id="deleteModal" tabindex="-2" aria-modal="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <h3>Yakin Ingin menghapus Data </h3>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <a type="button" href="/pengurus/delete/" class="btn btn-primary">Save changes</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- MODAL FOR VIEW -->
                            <div class="modal fade" id="largeModal<?= $item["nim"] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-4 mb-3">
                                                    <img src="https://sima.orbituinbkt.com/profile/pengurus/<?= $item["foto"] ?>" class="rounded" alt="" width="180" height="180" style="object-fit: cover;">
                                                </div>
                                                <div class=" col-md-8">
                                                    <h2 class="fs-5 fw-bold"><?= $item["nama"] ?></h2>
                                                    <h5 class="text-muted">ID. <?= $item["nim"] ?></h5>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <label class=" col-sm-3 col-form-label" for="basic-default-name">Status Pengurus</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value=" <?= $item["active"] == 1 ? "Aktif" : "Non Aktif" ?>" readonly>

                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Tempat, Tanggal Lahir</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["tempat_lahir"] ?>, <?= $item["tanggal_lahir"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["jenis_kelamin"] == 0 ? "Perempuan" : "Laki- Laki" ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Alamat</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["alamat"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Fakultas</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["fakultas_nama"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Prodi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["prodi_nama"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Bidang</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["bidang_nama"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["email"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">No Telp</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["no_telp"] ?>" readonly>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>