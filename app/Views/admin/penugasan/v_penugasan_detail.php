<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>

<div class="card mb-5">
    <!-- Notifications -->
    <h5 class="card-header">Penugasan Detail</h5>

    <div class="table-responsive">
        <table class="table table-striped table-borderless border-bottom">

            <tbody>
                <tr>
                    <td class="text-nowrap">Penugasan No </td>
                    <td><?= $penugasan["penugasan_no_surat"] ?></td>
                </tr>
                <tr>
                    <td class="text-nowrap">Nama Penugasan </td>
                    <td><?= $penugasan["penugasan_nama"] ?></td>
                </tr>
                <tr>
                    <td class="text-nowrap">Mulai - Selesai </td>
                    <td><?= $penugasan["penugasan_mulai"] ?> s/d <?= $penugasan["penugasan_selesai"] ?> </td>
                </tr>
                <tr>
                    <td class="text-nowrap">Waktu </td>
                    <td><?= $penugasan["penugasan_waktu"] ?></td>
                </tr>
                <tr>
                    <td class="text-nowrap">Tempat </td>
                    <td><?= $penugasan["penugasan_tempat"] ?></td>
                </tr>
                <tr>
                    <td class="text-nowrap">Ditugaskan Oleh </td>
                    <td><?= $penugasan["penugasan_oleh"] ?></td>
                </tr>

                <tr>
                    <td class="text-nowrap">Surat Keputusan </td>
                    <td><?= $penugasan["penugasan_deskripsi"] ?></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="card-body">
        <h6>File Surat Keputusan</h6>

        <div class="row">
            <div class="">
                <button type="submit" class="btn btn-primary me-2">Download</button>
            </div>
        </div>

    </div>
    <!-- /Notifications -->
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Penugasan Anggota</h5>
        <!-- <a href="#" data-bs-target="#backDropModal" class="btn btn-primary mb-3">
                    <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah User
                </a> -->
        <a type="button" class="btn btn-primary" href="/penugasan/tambah">
            <span class="tf-icons bx bx-book-add"></span>&nbsp; Tambah Keangotaan Penugasan
        </a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">

            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>DIVISI</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($penugasan_anggota as $anggota) : ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $anggota["nim"] ?></strong></td>
                        <td><?= $anggota["nama"] ?></td>
                        <td><?= $anggota["bidang_tugas"] ?></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php
                foreach ($penugasan_pengurus as $pengurus) : ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $pengurus["nim"] ?></strong></td>
                        <td><?= $pengurus["nama"] ?></td>
                        <td><?= $pengurus["bidang_tugas"] ?></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>