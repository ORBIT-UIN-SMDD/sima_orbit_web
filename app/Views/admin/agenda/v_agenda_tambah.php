<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>

<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah agenda</h5>
                <!-- <small class="text-muted float-end">Default label</small> -->
            </div>
            <div class="card-body">
                <form method="post" action="/agenda/save" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Nama agenda</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama agenda" name="agenda_nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" f>Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="agenda_deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Mulai</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2021-06-18" name="agenda_mulai">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Selesai</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="2021-06-18" name="agenda_selesai">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="time" value="12:30:00" name="agenda_waktu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Lokasi Tempat agenda" name="agenda_tempat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Keterangan" name="agenda_keterangan">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Selesai</button>

                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>