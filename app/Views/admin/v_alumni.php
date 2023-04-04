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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Data Alumni
                </button>
                <!-- FOR MODALS -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" action="/user/newUser" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Tambah Data Alumni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mt-3">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">RFID</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter RFID" id="inputrfid" name="rfid">
                                            <button class="btn btn-outline-primary" type="button" id="scanAjax">Scan</button>
                                            <button class="btn btn-outline-primary" type="button" id="clearAjax">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Name</label>
                                        <input type="text" id="name" class="form-control" placeholder="Enter Name" name="nama">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailBackdrop" class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Enter Email" name="email">
                                    </div>
                                    <div class="col mb-0">
                                        <label for="phoneBackdrop" class="form-label">No. HP</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Enter Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col mb-3">
                                        <label for="tokenBackdrop" class="form-label">Token Telegram</label>
                                        <input type="text" id="token" class="form-control" placeholder="Enter Token Telegram" name="token">
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

                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='bx bx-info-circle'></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-secondary">
                                            <i class='tf-icons bx bxs-edit'></i>
                                        </a>
                                        <a type="button" href="/admin/delete/<?= $item["nim"] ?>" class="btn btn-outline-secondary">
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