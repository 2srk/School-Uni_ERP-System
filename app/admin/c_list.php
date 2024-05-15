<?php 
include "header.php";
?>
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Student List
                </h2>
              </div><div class="col-6 col-sm-4 col-md-2">
                        <a href="./add_st.php" class="btn btn-primary w-100">
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
                        <th><button class="table-sort" data-sort="sort-email">Email</button></th>
                        <th><button class="table-sort" data-sort="sort-phone">Phone</button></th>

                        <th><button class="table-sort" data-sort="sort-quantity">ID</button></th>
                        <th><button class="table-sort" data-sort="sort-quantity">Class</button></th>
                        <th><button class="table-sort" data-sort="sort-progress">Attendence</button></th>
                        <th><button class="table-sort" data-sort="sort-progress">Dues</button></th>
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      
                      <?php
                       include 'dbc.php';
    //storing database details in variables.
   
    //checking if connection is working or not
    $ncclass = $_GET['id'];
    //Output Form Entries from the Database
    $sql = "SELECT name, email, phone, att, id, class, fee FROM student WHERE class =  $ncclass";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<tr > <td class="sort-name">' . $row["name"] . '</td>
           <td class="sort-email">' . $row["email"] . '</td>
           <td class="sort-p"> ' . $row["phone"] . '</td>
           <td class="sort-quantity"> ' . $row["id"] . '</td>
           <td class="sort-p"> ' . $row["class"] . '</td>
           <td class="sort-progress" data-progress="' . $row["att"] . '">
           <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">' . $row["att"] . '%</div>
                            <div class="col">
                              <div class="progress" style="width: 5rem">
                                <div class="progress-bar" style="width: ' . $row["att"] . '%" role="progressbar" aria-valuemin="0" aria-valuemax="100" >
                                  </div>
                                </div>
                              </div>
                            </div></td>
                            <td class="sort-p"> ₹' . $row["fee"] . '</td>
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
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2023
                    <a href="." class="link-secondary">plak.in</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                      v1.0.0-beta19
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
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
  </body>
</html>