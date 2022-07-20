<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('dashboard'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('dashboard/update'); ?>">
                    <input type="hidden" name="id" value="<?= $m['id']; ?>">
                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input type="text" name="project_name" value="<?= $m['project_name']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Client</label>
                        <input type="text" name="client" value="<?= $m['client']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Project Leader</label>
                        <input type="text" name="project_leader" value="<?= $m['project_leader']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Start Date</label>
                        <input type="text" name="start_date" value="<?= $m['start_date']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">End Date</label>
                        <input type="text" name="end_date" value="<?= $m['end_date']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Progress</label>
                        <input type="text" name="progres" value="<?= $m['progres']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>