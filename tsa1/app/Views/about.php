<?= view('templates/header', ['title' => 'About Developer - Dashboard', 'page_heading' => 'About Developer']) ?>

<!-- Developer Card -->
<div class="row">
    <div class="col-md-8">
        <div class="dash-card p-4">
            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-code-slash fs-1 text-danger me-3"></i>
                <div>
                    <h4 class="fw-bold m-0"><?= esc($user['full_name'] ?? 'Aryanne Chelsea Cruz') ?></h4>
                    <span class="text-muted">Web System Technologies Developer</span>
                </div>
            </div>
            <hr>
            <div class="row g-3">
                <div class="col-sm-6">
                    <small class="text-muted d-block">Course & Section</small>
                    <span class="fw-semibold">IT0049 — CRUZ TC32</span>
                </div>
                <div class="col-sm-6">
                    <small class="text-muted d-block">Assessment</small>
                    <span class="fw-semibold">Technical Summative Assessment 1 (TSA1)</span>
                </div>
                <div class="col-sm-6">
                    <small class="text-muted d-block">Framework</small>
                    <span class="fw-semibold">CodeIgniter 4 (PHP)</span>
                </div>
                <div class="col-sm-6">
                    <small class="text-muted d-block">UI Design</small>
                    <span class="fw-semibold">Crimson Theme Dashboard</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>