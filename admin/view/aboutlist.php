<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>About Posts (<?= $totalRecord ?> Total)</h4>
                            <a href="<?= admin_url('addaboutpost') ?>" class="btn btn-primary">
                                <i class="icon-plus"></i> Add New About Post
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($query)): ?>
                            <div class="table-responsive theme-scrollbar">
                                <table class="table table-striped table-hover" id="about-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="80">Image</th>
                                            <th>Title</th>
                                            <th width="120">Status</th>
                                            <th width="150">Created Date</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $row): ?>
                                            <?php 
                                            $originalDate = $row['created_at'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y - H:i');
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <?php if (!empty($row['aboutimage'])): ?>
                                                            <img class="img-fluid rounded" 
                                                                 src="<?= admin_public_url('assets/images/') . $row['aboutimage'] ?>" 
                                                                 alt="<?= htmlspecialchars($row['abouttitle']) ?>"
                                                                 style="width: 50px; height: 50px; object-fit: cover;">
                                                        <?php else: ?>
                                                            <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                                                 style="width: 50px; height: 50px;">
                                                                <i class="fa fa-image text-muted"></i>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1"><?= htmlspecialchars($row['abouttitle']) ?></h6>
                                                        <p class="text-muted mb-0 small">
                                                            <?= cut_text($row['aboutdesc'], 80) ?>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge badge-<?= $row['status'] == 'active' ? 'success' : 'secondary' ?>">
                                                        <?= ucfirst($row['status']) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted"><?= $formattedDate ?></span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" 
                                                                type="button" data-bs-toggle="dropdown">
                                                            <i class="icon-more-alt"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" 
                                                                   href="<?= admin_url('editaboutpost?id=') . $row["id"] ?>">
                                                                    <i class="icon-wand"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="aboutpage" 
                                                                   column="id" 
                                                                   id="<?= $row["id"] ?>" 
                                                                   onclick="delete_post()">
                                                                    <i class="icon-trash"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Pagination -->
                            <?php if ($totalRecord > $pageLimit): ?>
                                <div class="d-flex justify-content-center mt-3">
                                    <ul class="pagination">
                                        <?= $db->showPagination(admin_url('aboutlist' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="icon-info fa-4x text-muted mb-3"></i>
                                <h4>No About Posts Found</h4>
                                <p class="text-muted">Start by creating your first about post.</p>
                                <a href="<?= admin_url('addaboutpost') ?>" class="btn btn-primary">
                                    <i class="icon-plus"></i> Create About Post
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<?php require admin_view('static/footer') ?>