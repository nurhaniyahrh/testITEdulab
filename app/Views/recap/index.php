<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Schedule in A Week</h1>
            <!-- <a href="/recap/order" class="btn btn-secondary">Order</a> -->
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Date</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subjects</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($schedule as $s) : ?>
                    <tr>
                        <td><?= $s['hari']; ?></td>
                        <td><?= $s['tanggal']; ?></td>
                        <td><?= $s['kelas']; ?></td>
                        <td><?= $s['subjects']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

