<link rel="stylesheet" href="<?= base_url(); ?>assets/custom/custom.css">
<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white text-center">
                <?= $title; ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Client</th>
                                <th>Project Leader</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Progress</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($monitoring as $m) { ?>
                                <tr>
                                    <td><?= $m['project_name']; ?></td>
                                    <td><?= $m['client']; ?></td>
                                    <td>
                                        <div class="flex-container">
                                            <div style="padding-right: 10px;">
                                                <img src="<?php echo $m['pic_leader']; ?>" alt="" class="img rounded-circle">
                                            </div>
                                            <div>
                                                <?= $m['project_leader']; ?>
                                                <p class="text-muted"><?= $m['email_leader']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $m['start_date']; ?></td>
                                    <td><?= $m['end_date']; ?></td>
                                    <td>
                                        <div class="progress">
                                            <div id="<?= $m['progres'] ?>" name="<?= $m['progres'] ?>" class="progress-bar<?= $m['progres'] == 100 ? ' bg-success' : '' ?>" role="progressbar" style="width: <?= $m['progres'] ?>%;" value="<?= $m['progres'] ?>" aria-valuemin="0" aria-valuemax="100"><?= $m['progres'] ?>%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() . 'dashboard/edit/' . $m['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                                        <a href="<?= base_url() . 'dashboard/hapus/' . $m['id']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>