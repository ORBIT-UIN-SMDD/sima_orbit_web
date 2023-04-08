<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Pengumuman</h5>
                <!-- <a href="#" data-bs-target="#backDropModal" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah User
                </a> -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Buat Pengumuman
                </button>
                <!-- FOR MODALS -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" action="/pengumuman/broadcast" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Buat Pengumuman</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">judul Pengumuman</label>
                                        <input type="text" id="name" class="form-control" placeholder="Masukkan Judul Pengumuman" name="pengumuman_judul">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">deskripsi</label>
                                        <textarea class="form-control" rows="3" name="pengumuman_deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>tanggal</th>
                            <th>pembuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($pengumuman as $item) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $item["pengumuman_judul"] ?></td>
                                <td><?= $item["pengumuman_deskripsi"] ?></td>
                                <td><?= $item["pengumuman_tanggal"] ?></td>
                                <td><?= $item["pengumuman_pembuat"] ?></td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" href="/pengumuman/delete/<?= $item["pengumuman_id"] ?>" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bx-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>