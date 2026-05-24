<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Mediator</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Mediator</h6>
    </div>
    <div class="card-body">
    <form action="<?= base_url('mediator/add'); ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp" value="<?= set_value('telp'); ?>">
            <?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="<?= set_value('nip'); ?>">
            <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="bidang">Bidang</label>
            <select class="form-control" id="bidang" name="bidang">
                <option value="">Pilih Bidang</option>
                <option value="Hukum">Hukum</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Pendidikan">Pendidikan</option>
                <!-- Tambahkan opsi bidang lainnya sesuai kebutuhan -->
            </select>
            <?= form_error('bidang', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>
</div>

</div>
