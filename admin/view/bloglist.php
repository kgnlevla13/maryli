<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Blog Posts (<?= $totalRecord ?> Total)</h4>
                            <a href="<?= admin_url('addblogpost') ?>" class="btn btn-primary">
                                <i class="icon-plus"></i> Add New Blog Post
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($query)): ?>
                            <div class="table-responsive theme-scrollbar">
                                <table class="table table-striped table-hover" id="blog-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="80">Image</th>
                                            <th>Title</th>
                                            <th width="100">Author</th>
                                            <th width="80">Type</th>
                                            <th width="120">Category</th>
                                            <th width="80">Status</th>
                                            <th width="80">Views</th>
                                            <th width="150">Published Date</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $row): ?>
                                            <?php 
                                            $originalDate = $row['create_date'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y');

                                            if (isset($row['blogimage'])) {
                                                $m = $row['blogimage'];
                                            } else {
                                                $m = 'video.jpg';
                                            }
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <?php if ($m != 'video.jpg'): ?>
                                                            <img class="img-fluid rounded" 
                                                                 src="<?= admin_public_url('assets/images/') . $m ?>" 
                                                                 alt="<?= htmlspecialchars($row['blogtitle']) ?>"
                                                                 style="width: 50px; height: 50px; object-fit: cover;">
                                                        <?php else: ?>
                                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center" 
                                                                 style="width: 50px; height: 50px;">
                                                                <i class="fa fa-play text-white"></i>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h6 class="mb-1">
                                                            <a href="<?= admin_url('editblogpost?id=') . $row["blog_id"] ?>" 
                                                               class="text-decoration-none">
                                                                <?= htmlspecialchars($row['blogtitle']) ?>
                                                            </a>
                                                        </h6>
                                                        <p class="text-muted mb-0 small">
                                                            <?= cut_text($row['blogcontent'], 80) ?>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted"><?= htmlspecialchars($row['blogauthor']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-<?= $row['blogtype'] == 'Video' ? 'danger' : ($row['blogtype'] == 'Image' ? 'success' : ($row['blogtype'] == 'Audio' ? 'warning' : 'info')) ?>">
                                                        <?= $row['blogtype'] ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= htmlspecialchars($row['blogcategory']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-<?= $row['status'] == 'Publish' ? 'success' : ($row['status'] == 'Drafts' ? 'warning' : 'secondary') ?>">
                                                        <?= $row['status'] ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dark"><?= number_format($row['view']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= $formattedDate ?></span>
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
                                                                   href="<?= admin_url('editblogpost?id=') . $row["blog_id"] ?>">
                                                                    <i class="icon-wand"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" 
                                                                   href="<?= site_url(permalink($row['blogtitle'])) . '/' . $row['blog_id'] ?>" 
                                                                   target="_blank">
                                                                    <i class="icon-eye"></i> View
                                                                </a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="blog" 
                                                                   column="blog_id" 
                                                                   id="<?= $row["blog_id"] ?>" 
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
                                        <?= $db->showPagination(admin_url('bloglist' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="icon-book-open fa-4x text-muted mb-3"></i>
                                <h4>No Blog Posts Found</h4>
                                <p class="text-muted">Start by creating your first blog post.</p>
                                <a href="<?= admin_url('addblogpost') ?>" class="btn btn-primary">
                                    <i class="icon-plus"></i> Create Blog Post
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