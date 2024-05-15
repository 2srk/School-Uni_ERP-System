<?php 
include "header.php";
?>
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Add Admin
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="./db/adda.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Add Admin</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                            
                          <div class="mb-3">
                              <label class="form-label required">Name</label>
                              <input type="text" class="form-control" name="username" placeholder="Required..." >
                            </div>
                            <div class="mb-3">
                              <label class="form-label required">Email</label>
                              <input type="text" class="form-control" name="email" placeholder="Required..." >
                            </div>
                            
                          </div> 
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button type="submit" class="btn btn-primary">Add admin</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
include "footer.php";
?>
    