<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Newsletter Subscribers (<?= $totalRecord ?> Total)</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($subscribers)): ?>
                            <!-- Filter and Search -->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-search"></i></span>
                                        <input type="text" class="form-control" id="searchSubscribers" placeholder="Search by email...">
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive theme-scrollbar">
                                <table class="table table-striped table-hover" id="subscribers-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="80">ID</th>
                                            <th>Email Address</th>
                                            <th width="150">Registration Date</th>
                                            <th width="120">Status</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($subscribers as $subscriber): ?>
                                            <?php 
                                            $originalDate = $subscriber['created_at'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y');
                                            $formattedDateTime = $dateTime->format('j F Y - H:i');
                                            
                                            // Check if email is valid
                                            $isValidEmail = filter_var($subscriber['email'], FILTER_VALIDATE_EMAIL);
                                            ?>
                                            <tr>
                                                <td>
                                                    <span class="text-muted">#<?= $subscriber['id'] ?></span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <?php if ($isValidEmail): ?>
                                                                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" 
                                                                     style="width: 35px; height: 35px;">
                                                                    <i class="fa fa-envelope text-white small"></i>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" 
                                                                     style="width: 35px; height: 35px;">
                                                                    <i class="fa fa-exclamation text-white small"></i>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">
                                                                <a href="mailto:<?= $subscriber['email'] ?>" 
                                                                   class="text-decoration-none">
                                                                    <?= htmlspecialchars($subscriber['email']) ?>
                                                                </a>
                                                            </h6>
                                                            <small class="text-muted">
                                                                Domain: <?= substr(strrchr($subscriber['email'], "@"), 1) ?>
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
                                                    <?php if ($isValidEmail): ?>
                                                        <span class="badge badge-success">Active</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-warning">Invalid</span>
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
                                                                   href="mailto:<?= $subscriber['email'] ?>">
                                                                    <i class="icon-mail"></i> Send Email
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <button class="dropdown-item" 
                                                                        onclick="copyToClipboard('<?= $subscriber['email'] ?>')">
                                                                    <i class="icon-copy"></i> Copy Email
                                                                </button>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="subscribes" 
                                                                   column="id" 
                                                                   id="<?= $subscriber['id'] ?>" 
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
                                        <?= $db->showPagination(admin_url('newsletter' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="icon-mail fa-4x text-muted mb-3"></i>
                                <h4>No Subscribers Yet</h4>
                                <p class="text-muted">Subscribers will appear here when people sign up for your newsletter.</p>
                                <div class="mt-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importModal">
                                        <i class="icon-upload"></i> Import Subscribers
                                    </button>
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

<script>

function copyToClipboard(email) {
    navigator.clipboard.writeText(email).then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Email address copied to clipboard',
            timer: 1500,
            showConfirmButton: false
        });
    });
}

// Search functionality
document.getElementById('searchSubscribers').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#subscribers-table tbody tr');
    
    rows.forEach(row => {
        const email = row.cells[2].textContent.toLowerCase();
        if (email.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>

<?php require admin_view('static/footer') ?>