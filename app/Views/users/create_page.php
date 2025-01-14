<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 style="text-align: center;" class="mb-4 mt-3">Register</h1>

<?php if (session()->getFlashdata('errors')) : ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <form action="/users/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control" name="username" id="username" value="<?= old('username') ?>"><br>

        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= old('email') ?>"><br>

        <label for="password" class="form-label">Password :</label>
        <input type="password" class="form-control" name="password" id="password"><br>

        <label for="image" class="form-label">Image Profile :</label>
        <input type="file" class="form-control" name="foto" id="foto"><br>

        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>
</div>

<?= $this->endSection() ?>