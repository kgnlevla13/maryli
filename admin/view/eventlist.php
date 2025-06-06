<?php require admin_view('static/header') ?>

<div class="page-body">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Events (<?= $totalRecord ?> Total)</h4>
                            <a href="<?= admin_url('addeventpost') ?>" class="btn btn-primary">
                                <i class="icon-plus"></i> Add New Event
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($query)): ?>
                            <div class="table-responsive theme-scrollbar">
                                <table class="table table-striped table-hover" id="events-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="80">Image</th>
                                            <th>Event Title</th>
                                            <th width="100">Days</th>
                                            <th width="100">Time</th>
                                            <th width="120">Location</th>
                                            <th width="80">Type</th>
                                            <th width="120">Start Date</th>
                                            <th width="80">Views</th>
                                            <th width="100">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($query as $row): ?>
                                            <?php 
                                            $originalDate = $row['create_date'];
                                            $dateTime = new DateTime($originalDate);
                                            $formattedDate = $dateTime->format('j F Y');

                                            $startDate = $row['event_start_date'];
                                            $startDateTime = new DateTime($startDate);
                                            $formattedStartDate = $startDateTime->format('j M Y');

                                            if (isset($row['event_image_1'])) {
                                                $m = $row['event_image_1'];
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
                                                                 alt="<?= htmlspecialchars($row['event_title']) ?>"
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
                                                            <a href="<?= admin_url('editeventpost?id=') . $row["event_id"] ?>" 
                                                               class="text-decoration-none">
                                                                <?= htmlspecialchars($row['event_title']) ?>
                                                            </a>
                                                        </h6>
                                                        <p class="text-muted mb-0 small">
                                                            <?= cut_text($row['event_content'], 60) ?>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= htmlspecialchars($row['event_days']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= htmlspecialchars($row['event_time']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= htmlspecialchars($row['event_location']) ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-<?= $row['event_type'] == 'Image' ? 'success' : 'info' ?>">
                                                        <?= $row['event_type'] ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted small"><?= $formattedStartDate ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-dark"><?= number_format($row['view']) ?></span>
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
                                                                   href="<?= admin_url('editeventpost?id=') . $row["event_id"] ?>">
                                                                    <i class="icon-wand"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" 
                                                                   href="<?= site_url(permalink($row['event_title'])) . '/' . $row['event_id'] ?>" 
                                                                   target="_blank">
                                                                    <i class="icon-eye"></i> View
                                                                </a>
                                                            </li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item text-danger delete" 
                                                                   table="events" 
                                                                   column="event_id" 
                                                                   id="<?= $row["event_id"] ?>" 
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
                                        <?= $db->showPagination(admin_url('eventlist' . "?" . $pageParam . "=[page]")) ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="icon-calendar fa-4x text-muted mb-3"></i>
                                <h4>No Events Found</h4>
                                <p class="text-muted">Start by creating your first event.</p>
                                <a href="<?= admin_url('addeventpost') ?>" class="btn btn-primary">
                                    <i class="icon-plus"></i> Create Event
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