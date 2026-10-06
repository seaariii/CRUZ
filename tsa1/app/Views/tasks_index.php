<?= view('templates/header', ['title' => 'All Tasks - Dashboard', 'page_heading' => 'All Tasks History']) ?>

<!-- All Tasks Table -->
<div class="dash-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold m-0">Task Records Across All Dates</h5>
        <span class="badge bg-secondary rounded-pill px-3 py-2">Total: <?= count($tasks) ?></span>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Scheduled Date</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($tasks)): ?>
                    <?php $i = 1; ?>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td class="fw-bold text-secondary"><?= $i++ ?></td>
                            <td class="fw-semibold"><?= esc($task['title']) ?></td>
                            <td>
                                <span class="badge rounded-pill px-3 py-2 <?= $task['status'] === 'completed' ? 'badge-completed' : 'badge-pending' ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>
                            <td class="text-muted"><?= esc($task['task_date']) ?></td>
                            <td class="text-muted small"><?= esc($task['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">No task records found!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= view('templates/footer') ?>