  <?php require admin_view('static/header') ?>

  <div class="page-body">
      <!-- Container-fluid starts-->
      <div class="container-fluid default-dashboard">
         <div class="row widget-grid">
            <div class="col-xl-6 col-md-6 proorder-xl-1 proorder-md-1">
               <div class="card profile-greeting p-0">
                  <div class="card-body">
                     <div class="img-overlay">
                        <h1>Welcome Home,<br> Mary Li</h1>
                        <p>Welcome to your digital home! We're so glad you visited your dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 proorder-xl-1 proorder-md-1">
           <div class="card">
              <div class="card-body">
                 <div class="card-header card-no-border pb-0">
                    <div class="header-top daily-revenue-card">
                       <h4>Total Visitors</h4>
                   </div>
               </div>
               <div class="card-body pb-0 total-sells">
                <div class="d-flex align-items-center gap-3">
                   <div class="flex-shrink-0"><i data-feather="pie-chart"></i></div>
                   <div class="flex-grow-1">
                      <div class="d-flex align-items-center gap-2">
                         <h2>12,463</h2>
                     </div>
                 </div>
             </div>
             <div id="admissionRatio"></div>
         </div>
     </div>
 </div>
</div>
<div class="col-xl-3 col-md-6 proorder-xl-1 proorder-md-1">
   <div class="card">
      <div class="card-body">
         <div class="card-header card-no-border pb-0">
            <div class="header-top daily-revenue-card">
               <h4>Daily Visitors</h4>
           </div>
       </div>
       <div class="card-body pb-0 total-sells-4">
        <div class="d-flex align-items-center gap-3">
           <div class="flex-shrink-0"><i data-feather="user-plus"></i></div>
           <div class="flex-grow-1">
              <div class="d-flex align-items-center gap-2">
                 <h2>463</h2>
             </div>
         </div>
     </div>
     <div id="daily-revenue"></div>
 </div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-6">
   <div class="card">
      <div class="card-body student">
         <div class="d-flex gap-2 align-items-end">
            <div class="flex-grow-1">
               <h2>not available!</h2>
               <p class="mb-0 text-truncate">Total Followers</p>
           </div>
           <div class="flex-shrink-0"><img src="<?= admin_public_url('assets/images/dashboard/social/facebook.png') ?>" alt="facebook icon"></div>
       </div>
   </div>
</div>
</div>
<div class="col-xl-4 col-sm-6">
   <div class="card">
      <div class="card-body student-3">
         <div class="d-flex gap-2 align-items-end">
            <div class="flex-grow-1">
               <h2>not available!</h2>
               <p class="mb-0 text-truncate">Total Followers</p>
           </div>
           <div class="flex-shrink-0"><img src="<?= admin_public_url('assets/images/dashboard/social/instagram.png') ?>" alt="instagram icon"></div>
       </div>
   </div>
</div>
</div>
<div class="col-xl-4 col-sm-6">
   <div class="card">
      <div class="card-body student-4">
         <div class="d-flex gap-2 align-items-end">
            <div class="flex-grow-1">
               <h2>not available!</h2>
               <p class="mb-0 text-truncate">Total Followers</p>
           </div>
           <div class="flex-shrink-0"><img src="<?= admin_public_url('assets/images/dashboard/social/youtube.png') ?>" alt="youtube icon"></div>
       </div>
   </div>
</div>
</div>
<!-- The maximum number of listings required for blogs is twenty. (max 5 pages) -->
<div class="col-xl-6 proorder-xl-5 box-col-7 proorder-md-5">
   <div class="card">
      <div class="card-header card-no-border pb-0">
         <div class="header-top">
            <h4>Most Read Blogs</h4>
        </div>
    </div>
    <div class="card-body pt-0 projects px-0">
     <div class="table-responsive theme-scrollbar">
        <table class="table display" id="selling-product" style="width:100%">
           <thead>
              <tr>
                 <th></th>
                 <th>Name</th>
                 <th>Type</th>
                 <th>Date</th>
                 <th>Readings</th>
                 <th>Author</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody>


            <?php foreach ($bloggers as $blogger): ?>
                <?php 
                $originalDate = $blogger['create_date'];
                $dateTime = new DateTime($originalDate);
                $formattedDate = $dateTime->format('j M Y');
                ?>
                <tr>
                    <td></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0"><img height="38" width="38" src="<?= admin_public_url('assets/images/') . $blogger['blogimage'] ?>" alt=""></div>
                            <div class="flex-grow-1 ms-2"><a href="<?= admin_url('editblogpost?id=') . $blogger["blog_id"] ?>">
                                <h6><?= $blogger['blogtitle'] ?></h6>
                            </a></div>
                        </div>
                    </td>
                    <td class="project-dot">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><span class="bg-primary"></span></div>
                            <div class="flex-grow-1">
                                <h6><?= $blogger['blogtype'] ?></h6>
                            </div>
                        </div>
                    </td>
                    <td><?= $formattedDate ?></td>
                    <td><?= $blogger['view'] ?></td>
                    <td><?= $blogger['blogauthor'] ?></td>
                    <td class="text-center">
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                                <a class="dropdown-item" href="<?= admin_url('editblogpost?id=') . $blogger["blog_id"] ?>">Edit</a>
                                <a class="dropdown-item delete" table="blog" column="blog_id" id="<?=$blogger["blog_id"]?>" onclick="delete_post()">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>


        </tbody>
    </table>
</div>
</div>
</div>
</div>
<!-- The maximum number of listings required for classes is twenty. (max 5 pages) -->
<div class="col-xl-6 col-md-12 proorder-md-4">
   <div class="card">
      <div class="card-header card-no-border pb-0">
         <div class="header-top">
            <h4>Most Viewed Classes</h4>
        </div>
    </div>
    <div class="card-body pt-0 assignments-table px-0">
     <div class="table-responsive theme-scrollbar">
        <table class="table display" id="assignments-table" style="width:100%">
           <thead>
              <tr>
                 <th></th>
                 <th>Name</th>
                 <th></th>
                 <th>Date</th>
                 <th>Views</th>
                 <th>Author</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody>
            <?php foreach ($classes as $class): ?>
                <?php 
                $originalDate = $class['create_date'];
                $dateTime = new DateTime($originalDate);
                $formattedDate = $dateTime->format('j M Y');
                ?>
                <tr>
                 <td></td>
                 <td>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img height="38" width="38" src="<?= admin_public_url('assets/images/') . $class['classimage'] ?>" alt=""></div>
                       <div class="flex-grow-1 ms-2"><a href="<?= admin_url('editclassespost?id=') . $class["class_id"] ?>">
                          <h6><?= $class['classtitle'] ?></h6>
                      </a></div>
                  </div>
              </td>
              <td class="project-dot"></td>
              <td><?= $formattedDate ?></td>
              <td><?= $class['view'] ?></td>
              <td>Monry Hasu</td>
              <td class="text-center">
                <div class="dropdown icon-dropdown">
                   <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                      <a class="dropdown-item" href="<?= admin_url('editclassespost?id=') . $class["class_id"] ?>">Edit</a>
                      <a class="dropdown-item delete" class="delete" table="classes" column="class_id" id="<?=$class["class_id"]?>" onclick="delete_post()">Delete</a>
                  </div>
              </div>
          </td>
      </tr>
  <?php endforeach ?>



</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>


<?php require admin_view('static/footer') ?>