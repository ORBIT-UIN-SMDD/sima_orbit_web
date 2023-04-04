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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Data kompetensi
                </button>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Nama Agenda</th>
                            <th>Mulai - Selesai</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Dibuat Oleh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($agenda as $item) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $item["agenda_nama"] ?></td>
                                <td><?= $item["agenda_mulai"] ?> s/d <?= $item["agenda_selesai"] ?></td>
                                <td><?= $item["agenda_waktu"] ?></td>
                                <td><?= $item["agenda_tempat"] ?></td>
                                <td><?= $item["agenda_pembuat"] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bxs-edit'></i>
                                        </a>
                                        <a type="button" href="/admin/delete/<?= $item["id"] ?>" class="btn btn-outline-secondary">
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