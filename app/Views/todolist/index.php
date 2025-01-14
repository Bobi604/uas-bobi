<?= $this->extend('laiout/tamplate') ?>

<?= $this->section('content') ?>
<div class="mb-4">
    <a href="<?= base_url('todolist/create') ?>" class="btn btn-primary">Add New Task</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Start Time</th>
            <th>Duration (s)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($todos)): ?>
            <?php foreach ($todos as $todo): ?>
                <tr>
                    <td><?= esc($todo['id']) ?></td>
                    <td><?= esc($todo['title']) ?></td>
                    <td><?= esc($todo['description'] ?? '-') ?></td>
                    <td><?= esc($todo['status']) ?></td>
                    <td><?= esc($todo['start_time'] ?? '-') ?></td>
                    <td><?= esc($todo['duration'] ?? '0') ?></td>
                    <td>
                        <a href="<?= base_url('todolist/edit/' . $todo['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('todolist/delete/' . $todo['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        <?php if (empty($todo['start_time'])): ?>
                            <a href="<?= base_url('todolist/start-timer/' . $todo['id']) ?>" class="btn btn-success btn-sm">Start Timer</a>
                        <?php else: ?>
                            <a href="<?= base_url('todolist/stop-timer/' . $todo['id']) ?>" class="btn btn-info btn-sm">Stop Timer</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="text-center">No tasks found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
