<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Admin</h5>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Admin
                </button>

                <!-- FOR MODALS -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" action="/admin/create" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Tambah Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Nama</label>
                                        <input type="text" id="name" class="form-control" placeholder="Masukkan Nama Admin" name="admin_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Email</label>
                                        <input type="text" id="name" class="form-control" placeholder="Masukkan Email Admin" name="admin_email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Password</label>
                                        <input type="text" id="name" class="form-control" placeholder="Masukkan Password Admin" name="admin_password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Level</label>
                                        <select class="form-select" aria-label="Default select example" name="admin_level">
                                            <option value="admin">admin</option>
                                        </select>
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
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($admin as $item) : ?>
                            <tr>
                                <td> <?= $no++ ?> </td>
                                <td><?= $item["admin_name"] ?></td>
                                <td><?= $item["admin_email"] ?></td>
                                <td><?= $item["admin_password"] ?></td>
                                <td><?= $item["admin_level"] ?> </td>
                                <td><?= $item["admin_status"] == 0 ? "Tidak Aktif" : "Aktif" ?> </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">

                                        <a type="button" class="btn btn-outline-secondary" href="/penugasan/detail/<?= $item["admin_id"] ?>">
                                            <i class='bx bx-edit'></i>
                                        </a>

                                        </a>
                                        <a type="button" href="/admin/delete/<?= $item["admin_id"] ?>" class="btn btn-outline-secondary">
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