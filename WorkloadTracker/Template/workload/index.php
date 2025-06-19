<div class="page-header">
    <h2>Team Workload Overview</h2>
</div>

<div class="workload-grid">
    <?php foreach ($workload_data as $user): ?>
        <div class="workload-card">
            <div class="workload-header">
                <h3><?= $this->text->e($user['name']) ?></h3>
                <span class="workload-status status-<?= $user['status'] ?>">
                    <?= strtoupper($user['status']) ?>
                </span>
            </div>
            
            <div class="workload-progress">
                <div class="progress-bar progress-<?= $user['status'] ?>" 
                     style="width: <?= min($user['utilization'], 100) ?>%"></div>
            </div>
            
            <div class="workload-details">
                <strong><?= round($user['assigned_hours'], 1) ?>h</strong> of 
                <strong><?= $user['capacity'] ?>h</strong> capacity
                <br>
                <small><?= round($user['utilization'], 1) ?>% utilized | <?= $user['task_count'] ?> tasks</small>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php if (empty($workload_data)): ?>
    <div class="alert alert-info">
        <p>No users found. Create some users and assign tasks to see workload data.</p>
    </div>
<?php endif ?>
