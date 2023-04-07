<?= $this->extend('admin/layouts') ?>

<?= $this->section('content') ?>
<div class="col-md-12 mb-4">

</div>
<?php echo \Config\Services::validation()->listErrors() ?>
<form action="/alumni/save" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Data Alumni</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                        <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('nama')) ? 'is-invalid' : ''  ?> " id="nama" name="nama" placeholder="Nama mu" value="<?= old('nama'); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">NIM</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : ''  ?>" id="nim" name="nim" placeholder="NIM mu" value="<?= old('nim'); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''  ?> " placeholder="name@example.com" aria-label="john.doe" aria-describedby="basic-default-email2" value="<?= old('email'); ?>">
                        </div>
                        <div class="form-text">You can use letters, numbers &amp; periods</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">No Telp</label>
                        <input type="text" id="no_telp" name="no_telp" class="form-control phone-mask <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''  ?>" placeholder="+62" value="<?= old('no_telp'); ?>">
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control phone-mask" placeholder="Tempat lahir mu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Tanggal Lahir</label>
                        <input class="form-control" type="date" value="2021-06-18" id="tanggal_lahir" name="tanggal_lahir">
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Jenis Kelamin</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="1">Laki - Laki</option>
                            <option value="0">Perempuan</option>
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control phone-mask" placeholder="alamat mu">
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Periode Keanggotaan</label>
                        <input type="text" id="periode" name="periode" class="form-control phone-mask <?= ($validation->hasError('periode')) ? 'is-invalid' : ''  ?>" placeholder=" Periode keanggotaan orbit" value="<?= old('periode'); ?>">
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="form-control phone-mask" placeholder="Pekerjaan mu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Golongan Darah</label>
                        <input type="text" id="golongan darah" name="golongan darah" class="form-control phone-mask" placeholder="Golongan darah mu">
                    </div> -->

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Foto</h5>
                    <!-- <small class="text-muted float-end">Kategori Blog</small> -->
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Passfoto 3 X 4, Ukuran Masksimal 4MB</label>
                            <div class="card mb-3">
                                <img class="card-img-top img-preview" src="<?= base_url() ?>/thumbnail/preview-img.jpg" alt="Card image cap">
                            </div>
                            <input class="form-control <?= ($validation->hasError('file')) ? 'is-invalid' : ''  ?>" type="file" id="thumb" name="profile" onchange="ImgPreview()">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">
                                Selesai
                                <span class="tf-icons bx bx-send"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection() ?>