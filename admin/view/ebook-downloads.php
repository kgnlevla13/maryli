<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ebook Downloads (<?= $totalRecord ?> Total)</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($downloads)): ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Download Date</th>
                                            <th>IP Address</th>
                                            <th>Email Sent</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($downloads as $download): ?>
                                            <?php 
                                            $originalDate = $download['download_date'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y - H:i');
                                            ?>
                                            <tr>
                                                <td><?= $download['id'] ?></td>
                                                <td><?= htmlspecialchars($download['name']) ?></td>
                                                <td>
                                                    <a href="mailto:<?= $download['email'] ?>">
                                                        <?= $download['email'] ?>
                                                    </a>
                                                </td>
                                                <td><?= $formattedDate ?></td>
                                                <td>
                                                    <small class="text-muted"><?= $download['ip_address'] ?></small>
                                                </td>
                                                <td>
                                                    <?php if (isset($download['email_sent']) && $download['email_sent']): ?>
                                                        <span class="badge badge-success">Sent</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-warning">Not Sent</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="mailto:<?= $download['email'] ?>">
                                                                    <i class="fa fa-envelope"></i> Send Email
                                                                </a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="ebook_downloads" 
                                                                   column="id" 
                                                                   id="<?= $download['id'] ?>" 
                                                                   onclick="delete_post()">
                                                                    <i class="fa fa-trash"></i> Delete
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
                                <div class="pagination-container text-center mt-3">
                                    <ul class="pagination justify-content-center">
                                        <?= $db->showPagination(admin_url('ebook-downloads' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="fa fa-download fa-4x text-muted mb-3"></i>
                                <h4>No E-book Downloads Yet</h4>
                                <p class="text-muted">E-book download records will appear here when people download your e-book.</p>
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