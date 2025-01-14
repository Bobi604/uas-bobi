<?= $this->extend('laiout/tamplate') ?>

<?= $this->section('content') ?>
<form action="<?= isset($todo) ? base_url('todolist/update/' . $todo['id']) : base_url('todolist/store') ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= esc($todo['title'] ?? '') ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description"><?= esc($todo['description'] ?? '') ?></textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="pending" <?= isset($todo['status']) && $todo['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
            <option value="completed" <?= isset($todo['status']) && $todo['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($todo) ? 'Update' : 'Create' ?> Task</button>
    <a href="<?= base_url('todolist') ?>" class="btn btn-secondary">Cancel</a>
</form>
<?= $this->endSection() ?>
