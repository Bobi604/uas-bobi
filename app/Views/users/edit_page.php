<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 class="mb-4 mt-3" style="text-align: center;">Edit User</h1>

<?php if (session()->getFlashdata('errors')) : ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <form action="/users/update/<?= $user['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <label for="username" class="form-label">Username :</label><br>
        <input type="text" class="form-control" name="username" id="username" value="<?= $user['username'] ?>"><br>

        <label for="email" class="form-label">Email :</label><br>
        <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>"><br>

        <label for="profile_image" class="form-label">Profile Image :</label><br>
        <?php if (!empty($user['foto'])) : ?>
            <img src="<?= base_url('images/' . $user['foto']) ?>" class="form-control mb-2"
                style="width: 100px; height: 13vh;" alt="Current Image">
            <input type="hidden" name="current_image" value="<?= $user['foto'] ?>">
        <?php endif ?>
        <input type="file" class="form-control" name="foto" id="foto"><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>