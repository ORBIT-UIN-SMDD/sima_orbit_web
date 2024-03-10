<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Penugasan</h5>
                <!-- <small class="text-muted float-end">Default label</small> -->
            </div>
            <div class="card-body">
                <form method="post" action="/penugasan/save" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Nama Penugasan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama Penugasan" name="penugasan_nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Anggota</label>
                                <select class="form-select" id="exampleSelect" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <?php foreach ($penugasan_user as $user) : ?>
                                        <option value="gg">1</option>
                                        <option value="gg">2</option>
                                        <option value="gg">3</option>
                                        <option value="gg">4</option>
                                        <option value="gg">5</option>
                                        <option value="gg">6</option>
                                        <option value="gg">7</option>
                                    <?php endforeach; ?>
                                </select>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penugasan Selesai</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2021-06-18" name="penugasan_selesai">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penugasan Waktu</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="time" value="12:30:00" name="penugasan_waktu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penugasan Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Lokasi Tempat penugasan" name="penugasan_tempat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penugasan Oleh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Ditugaskan Oleh" name="penugasan_oleh">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">No Surat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nomor Surat Keputusan" name="penugasan_no_surat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Surat Keputusan Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="penugasan_deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">File SK</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="file_upload">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Selesai</button>

                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>