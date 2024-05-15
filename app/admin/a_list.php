<?php 
include "header.php";
?>
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Student List
                </h2>
              </div><div class="col-6 col-sm-4 col-md-2">
                        <a href="./add_a.php" class="btn btn-primary w-100">
                          Add New
                        </a>
                      </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort" data-sort="sort-name">Name</button></th>

                        <th><button class="table-sort" data-sort="sort-quantity">ID</button></th>
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      
                      <?php
                       include 'dbc.php';
    //storing database details in variables.
   
    //checking if connection is working or not

    //Output Form Entries from the Database
    $sql = "SELECT username, id FROM admin";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<tr > <td class="sort-name">' . $row["username"] . '</td>
           
          
           <td class="sort-quantity"> ' . $row["id"] . '</td>
                            </tr>';
       }
      
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/list.js/dist/list.min.js?1684106062" defer></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
      const list = new List('table-default', {
      	sortClass: 'table-sort',
      	listClass: 'table-tbody',
      	valueNames: [ 'sort-name', 'sort-type', 'sort-city', 'sort-score',
      		{ attr: 'data-date', name: 'sort-date' },
      		{ attr: 'data-progress', name: 'sort-progress' },
      		'sort-quantity'
      	]
      });
      })
    </script>
  <?php 
include "footer.php";
?>