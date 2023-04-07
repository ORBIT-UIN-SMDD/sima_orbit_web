<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Data Alumni ORBIT</h5>
                <!-- <a href="#" data-bs-target="#backDropModal" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah User
                </a> -->
                <a type="button" class="btn btn-primary" href="/alumni/tambah">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Data Alumni
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
                            <th>Periode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($alumni as $item) : ?>
                            <tr>
                                <td><?= $item["nim"] ?></td>
                                <td><?= $item["nama"] ?></td>
                                <td><?= $item["jenis_kelamin"] == 0 ? "Perempuan" : "Laki-Laki" ?></td>
                                <td><?= $item["email"] ?></td>
                                <td><?= $item["no_telp"] ?> </td>
                                <td> <?= $item["periode"] ?> </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#largeModal<?= $item["nim"] ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bxs-edit'></i>
                                        </a>
                                        <a type="button" href="/alumni/delete/<?= $item["nim"] ?>" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bx-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
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
                                                    <img src="https://sima.orbituinbkt.com/profile/alumni/<?= $item["foto"] ?>" class="rounded" alt="" width="180" height="180" style="object-fit: cover;">
                                                </div>
                                                <div class=" col-md-8">
                                                    <h2 class="fs-5 fw-bold"><?= $item["nama"] ?></h2>
                                                    <h5 class="text-muted">ID. <?= $item["nim"] ?></h5>
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
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Periode</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["periode"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["pekerjaan"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Gologan Darah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["golongan_darah"] ?>" readonly>
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