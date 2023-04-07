<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Kompetensi</h5>
                <!-- <small class="text-muted float-end">Default label</small> -->
            </div>
            <div class="card-body">
                <form method="post" action="/kompetensi/save" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Nomor Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nomor Sertifikat" name="sertifkat_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Nama Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Kompetensi" name="kompetensi_nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Bidang</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="bidang_id">
                                <option selected="">Open this select menu</option>
                                <?php foreach ($bidang as $item) : ?>
                                    <option value="<?= $item["bidang_id"] ?>"><?= $item["bidang_nama"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="NIM Anggota" name="nim">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Nama Anggota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Anggota" name="kompetensi_untuk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Diverifikasi Oleh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Di verfikasi oleh" name="kompetensi_diverifikasi_oleh">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">tanggal</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2023-01-01" name="kompetensi_tanggal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">File Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="file_upload">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>