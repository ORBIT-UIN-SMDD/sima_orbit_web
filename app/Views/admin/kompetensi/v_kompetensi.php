<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Kompetensi</h5>
                <!-- <a href="#" data-bs-target="#backDropModal" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah User
                </a> -->
                <a type="button" class="btn btn-primary" href="/kompetensi/tambah">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Data kompetensi
                </a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Diberikan Untuk</th>
                            <th>Nama Kompetensi</th>
                            <th>Bidang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($kompetensi as $item) : ?>
                            <tr>
                                <td><?= $item["sertifkat_no"] ?></td>
                                <td><?= $item["kompetensi_untuk"] ?><br> (<?= $item["nim"] ?>)</td>
                                <td><?= $item["kompetensi_nama"] ?></td>
                                <td><?= $item["bidang_nama"] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#largeModal<?= $item["sertifkat_no"] ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" href="/kompetensi/delete/<?= $item["sertifkat_no"] ?>" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bx-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- MODAL FOR VIEW -->
                            <div class="modal fade" id="largeModal<?= $item["sertifkat_no"] ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-2">
                                                <label class=" col-sm-3 col-form-label" for="basic-default-name">No Sertifikat</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value=" <?= $item["sertifkat_no"] ?>" readonly>

                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Nama Kompetensi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["kompetensi_nama"] ?>>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Bidang</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["bidang_nama"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Nama Penerima</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["kompetensi_untuk"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Diverifikasi Oleh</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["kompetensi_diverifikasi_oleh"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">Tanggal</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="basic-default-company" value="<?= $item["kompetensi_tanggal"] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-sm-3 col-form-label" for="basic-default-name">File Sertifikat</label>
                                                <div class="col-sm-9">
                                                    <button type="button" class="btn btn-outline-primary">Download</button>
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