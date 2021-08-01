<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Schedule</h1>
            <a href="/schedule/create" class="btn btn-primary">Tambah Jadwal</a>
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
                        <td><?= $s['day']; ?></td>
                        <td><?= $s['date']; ?></td>
                        <td><?= $s['class']; ?></td>
                        <td><?= $s['subjects']; ?></td>
                        <td>
                            <a href="" class="btn btn-secondary">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

