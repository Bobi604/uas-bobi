<?= $this->extend('laiout/tamplate') ?>
<?= $this->section('content') ?>

<h1 style="text-align: center;" class="mb-4 mt-3">Daftar User</h1>

<div class="container">
    <?php if (session()->getFlashdata('success')) : ?>
        <p style="color: green; text-align: center;"><?= session()->getFlashdata('success') ?></p>
    <?php endif ?>
</div>

<div class="container">
    <table class="table table-stripped table-users">
        <tr">
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Foto Profile</th>
            <th>🐕</th>
            </tr>

            <?php foreach ($users as $i => $user) : ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td>
                        <?php if (!empty($user['foto'])) : ?>
                            <img src="/images/<?= esc($user['foto']) ?>" alt="foto" style="max-width: 200px;">
                        <?php else : ?>
                            No Image
                        <?php endif ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="/users/delete/<?= $user['id'] ?>" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
    </table>

    <a href="/users/create" class="btn btn-primary">Tambah User Baru</a>
    <a href="/user/printPDF" class="btn btn-secondary mb-3">
        <i class="fa-solid fa-file-pdf"></i>cetak PDF
    </a>
</div>

<?= $this->endSection() ?>