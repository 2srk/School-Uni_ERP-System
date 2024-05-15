<?php 
include "header.php";
?>
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Add Counsil
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
                <form action="./db/addcoun.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Add Counsiler</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                            
                          <div class="mb-3">
                              <label class="form-label required">Name</label>
                              <input type="text" class="form-control" name="name" placeholder="Required..." >
                            </div>
                            <div class="mb-3">
                              <label class="form-label required">Phone</label>
                              <input type="text" class="form-control" name="phone" placeholder="Required..." >
                            </div>
                            <div class="mb-3">
                              <label class="form-label required">Email</label>
                              <input type="text" class="form-control" name="email" placeholder="Required..." >
                            </div>
                            
                            <div class="mb-3">
                              <div class="form-label">Add to Class</div>
                              <select class="form-select" name="class">
                                

                                <?php
                       include 'dbc.php';
    //storing database details in variables.
   
    //checking if connection is working or not
   
    //Output Form Entries from the Database
    $sql = "SELECT id FROM class";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '  <option value="' . $row["id"] . '">'. $row["id"] . '</option>';
       }
	 }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>

                              </select>
                            </div>
                          </div> 
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button type="submit" class="btn btn-primary">Add Counsiler</button>
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