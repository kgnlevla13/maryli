<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>E-book Downloads (<?= $totalRecord ?> Total)</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($downloads)): ?>
                            <!-- Filter and Search -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-search"></i></span>
                                        <input type="text" class="form-control" id="searchDownloads" placeholder="Search by name or email...">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive theme-scrollbar">
                                <table class="table table-striped table-hover" id="downloads-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="80">ID</th>
                                            <th>User Info</th>
                                            <th width="150">Download Date</th>
                                            <th width="120">IP Address</th>
                                            <th width="100">Email Status</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($downloads as $download): ?>
                                            <?php 
                                            $originalDate = $download['download_date'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y');
                                            $formattedDateTime = $dateTime->format('j F Y - H:i');
                                            
                                            // Check if email is valid
                                            $isValidEmail = filter_var($download['email'], FILTER_VALIDATE_EMAIL);
                                            $emailSent = isset($download['email_sent']) && $download['email_sent'];
                                            ?>
                                            <tr>
                                                <td>
                                                    <span class="text-muted">#<?= $download['id'] ?></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" 
                                                                 style="width: 40px; height: 40px;">
                                                                <i class="fa fa-user text-white small"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0"><?= htmlspecialchars($download['name']) ?></h6>
                                                            <small class="text-muted">
                                                                <a href="mailto:<?= $download['email'] ?>" 
                                                                   class="text-decoration-none">
                                                                    <?= htmlspecialchars($download['email']) ?>
                                                                </a>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="text-muted small"><?= $formattedDate ?></span><br>
                                                        <small class="text-muted"><?= $dateTime->format('H:i') ?></small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted small font-monospace">
                                                        <?= htmlspecialchars($download['ip_address']) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php if ($emailSent): ?>
                                                        <span class="badge badge-success">
                                                            <i class="fa fa-check"></i> Sent
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="badge badge-warning">
                                                            <i class="fa fa-clock"></i> Pending
                                                        </span>
                                                    <?php endif; ?>
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
                                                                   href="mailto:<?= $download['email'] ?>">
                                                                    <i class="icon-mail"></i> Send Email
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <button class="dropdown-item" 
                                                                        onclick="viewUserInfo(<?= htmlspecialchars(json_encode($download)) ?>)">
                                                                    <i class="icon-info"></i> View Details
                                                                </button>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="ebook_downloads" 
                                                                   column="id" 
                                                                   id="<?= $download['id'] ?>" 
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
                                        <?= $db->showPagination(admin_url('ebook-downloads' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="icon-download fa-4x text-muted mb-3"></i>
                                <h4>No E-book Downloads Yet</h4>
                                <p class="text-muted">E-book download records will appear here when people download your e-book.</p>
                                <div class="mt-3">
                                    <a href="<?= site_url() ?>" class="btn btn-primary" target="_blank">
                                        <i class="icon-eye"></i> View Website
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<!-- User Details Modal -->
<div class="modal fade" id="userDetailsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Download Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="userDetailsContent">
                <!-- Content will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

function viewUserInfo(download) {
    const content = `
        <div class="row">
            <div class="col-6"><strong>ID:</strong></div>
            <div class="col-6">#${download.id}</div>
        </div>
        <div class="row mt-2">
            <div class="col-6"><strong>Name:</strong></div>
            <div class="col-6">${download.name}</div>
        </div>
        <div class="row mt-2">
            <div class="col-6"><strong>Email:</strong></div>
            <div class="col-6">${download.email}</div>
        </div>
        <div class="row mt-2">
            <div class="col-6"><strong>Download Date:</strong></div>
            <div class="col-6">${download.download_date}</div>
        </div>
        <div class="row mt-2">
            <div class="col-6"><strong>IP Address:</strong></div>
            <div class="col-6">${download.ip_address}</div>
        </div>
        <div class="row mt-2">
            <div class="col-6"><strong>Email Sent:</strong></div>
            <div class="col-6">${download.email_sent ? 'Yes' : 'No'}</div>
        </div>
    `;
    
    document.getElementById('userDetailsContent').innerHTML = content;
    new bootstrap.Modal(document.getElementById('userDetailsModal')).show();
}

// Search functionality
document.getElementById('searchDownloads').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#downloads-table tbody tr');
    
    rows.forEach(row => {
        const name = row.cells[2].textContent.toLowerCase();
        if (name.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

</script>

<?php require admin_view('static/footer') ?>