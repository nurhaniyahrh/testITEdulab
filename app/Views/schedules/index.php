<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            <h1>Schedule</h1>
            <a href="/schedules/create" class="btn btn-primary">Tambah Jadwal</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Day</th>
                        <th scope="col">Date</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subjects</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($schedule as $s) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s['hari']; ?></td>
                        <td><?= $s['tanggal']; ?></td>
                        <td><?= $s['kelas']; ?></td>
                        <td><?= $s['subjects']; ?></td>
                        <td>
                            <a href="/schedules/edit/<?= $s['id']; ?>" class="btn btn-secondary">Edit</a>

                            <form action="/schedules/<?= $s['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" 
                                onclick="return confirm('Apakah jadwal akan dihapus?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

