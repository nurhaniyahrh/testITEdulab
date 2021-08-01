<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="my-3">Form Ubah Jadwal Belajar</h2>
            <form action="/schedules/update/<?= $schedule['id']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $schedule['id']; ?>">
                <div class="row mb-3">
                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('hari')) ? 
                    'is-invalid' : ''; ?>" id="hari" name="hari" autofocus value="<?= $schedule['hari']; ?>"> 
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('hari'); ?>
                    </div> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 
                    'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= $schedule['tanggal']; ?>">
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('tanggal'); ?>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 
                    'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= $schedule['kelas']; ?>">
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('kelas'); ?>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="subjects" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('subjects')) ? 
                    'is-invalid' : ''; ?>" id="subjects" name="subjects" value="<?= $schedule['subjects']; ?>">
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('subjects'); ?>
                    </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>