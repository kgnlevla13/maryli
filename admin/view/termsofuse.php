<?php require admin_view('static/header') ?>

<div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Terms of Use</h4>
                </div>
                <div class="card-body add-post">
                  <form id="termsofuse" class="row needs-validation" novalidate="" onsubmit="return false;">
                    <div class="col-sm-12">
                      <div class="email-wrapper">
                        <div class="theme-form">
                          <div class="mb-3">
                            <label>Content:</label>
                              <textarea id="editor" name="content" class="ckeditor" cols="10" rows="25">
                                <?= post('content') ? post('content') : $row['content'] ?>
                              </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-showcase text-end">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>

<?php require admin_view('static/footer') ?>