<?php ?>
<?= $this->extend('laiout/tamplate') ?>

<?= $this->section('content') ?>

<h2>Create Todo</h2>

<form action="/todolist/store" method="POST">
    <?= csrf_field() ?>

    <!-- Title -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?= old('title') ?>" class="form-control" required>
        <?php if (isset($errors['title'])): ?>
            <div class="text-danger"><?= $errors['title'] ?></div>
        <?php endif; ?>
    </div>

    <!-- Description -->
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control"><?= old('description') ?></textarea>
        <?php if (isset($errors['description'])): ?>
            <div class="text-danger"><?= $errors['description'] ?></div>
        <?php endif; ?>
    </div>

    <!-- Status -->
    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control" required>
            <option value="pending" <?= old('status') === 'pending' ? 'selected' : '' ?>>Pending</option>
            <option value="completed" <?= old('status') === 'completed' ? 'selected' : '' ?>>Completed</option>
        </select>
        <?php if (isset($errors['status'])): ?>
            <div class="text-danger"><?= $errors['status'] ?></div>
        <?php endif; ?>
    </div>

    <!-- Start Time -->
    <div class="form-group">
        <label for="start_time">Start Time</label>
        <input type="datetime-local" id="start_time" name="start_time" value="<?= old('start_time') ?>" class="form-control">
        <?php if (isset($errors['start_time'])): ?>
            <div class="text-danger"><?= $errors['start_time'] ?></div>
        <?php endif; ?>
    </div>

    <!-- Duration -->
    <div class="form-group">
        <label for="duration">Duration (minutes)</label>
        <input type="number" id="duration" name="duration" value="<?= old('duration') ?>" class="form-control" min="0">
        <?php if (isset($errors['duration'])): ?>
            <div class="text-danger"><?= $errors['duration'] ?></div>
        <?php endif; ?>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Save Todo</button>
</form>

<?= $this->endSection() ?>