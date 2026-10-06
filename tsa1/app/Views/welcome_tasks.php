<?= view('templates/header', ['title' => "Today's Tasks - Dashboard", 'page_heading' => 'Task Dashboard']) ?>

<!-- Welcome Greeting Banner -->
<div class="dash-card p-4 mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold text-dark mb-1">Welcome back, <?= esc($user['full_name'] ?? 'Aryanne Chelsea Cruz') ?>! 👋</h4>
            <p class="text-muted m-0">Here are your scheduled tasks for today: <strong><?= esc($today_date) ?></strong></p>
        </div>
        <span class="badge bg-danger rounded-pill px-3 py-2 fs-6"><?= count($tasks) ?> Tasks Scheduled</span>
    </div>
</div>

<!-- Tasks Table -->
<div class="dash-card p-4">
    <h5 class="fw-bold mb-3">Today's Schedule</h5>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($tasks)): ?>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td class="fw-bold text-secondary">#<?= esc($task['id']) ?></td>
                            <td class="fw-semibold"><?= esc($task['title']) ?></td>
                            <td>
                                <span class="badge rounded-pill px-3 py-2 <?= $task['status'] === 'completed' ? 'badge-completed' : 'badge-pending' ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>
                            <td class="text-muted"><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No tasks scheduled for today!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= view('templates/footer') ?>