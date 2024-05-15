<?php 
include "header.php";
?>
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  User Account Settings
                </h2>
              </div>
            </div>
          </div>
        </div> 
        
        <!-- Page body -->
        <div class="page-body">


          <div class="container-xl" id = "search">
            <div class="row row-cards">
              <div class="col-12">
                <form action="./user_accounts.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Search User</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                              <label class="form-label">ID</label>
                              <input type="text" class="form-control" name="sid" placeholder="ID">
                            </div>
                            <div class="mb-3">
                              <div class="form-label">User Type</div>
                              <select class="form-select" name="utype">
                                <option value="student">Student</option>
                                <option value="counsiler">Counsiler</option>
                                <option value="admin">Admin</option>
                              </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary ms-auto">Search</button>
                
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            
            </div>

            
            <div class="container-xl" id = "Edit">
            <div class="row row-cards">
              <div class="col-12">
                <form action="https://httpbin.org/post" method="post" class="card">
                  <div class="card-header">
                  <div class="col">
                <h2 class="page-title">
                  Edit Details
                </h2>
              </div>
                   
                          <?php 
            if(isset($_POST['sid'])){
              
              $sid= $_POST['sid'];
              include 'dbc.php';
              //storing database details in variables.
             
              //checking if connection is working or not
              if($_POST['utype']=='student'){
              //Output Form Entries from the Database
              $sql = "SELECT name, email, phone, att, id, class, status FROM student WHERE id =  $sid";
              //fire query
              $result = mysqli_query($con, $sql);
              if(mysqli_num_rows($result) > 0)
              {
                 
                 while($row = mysqli_fetch_assoc($result)){
                    
                    
                     echo ' 
                     <div class="col-6 col-sm-4 col-md-2">
                         <a href="./db/passr.php?type=st&id='.$row["id"].'" class="btn btn-primary w-100">
                           Reset Password
                         </a>
                       </div>
                   </div>
                   <div class="card-body">
                     <div class="row">
                       <div class="col-xl-4">
                         <div class="row">
                           <div class="col-md-6 col-xl-12">
                           <div class="mb-3">
                     <label class="form-label">ID</label>
                     <input type="text" class="form-control" name="id" value="'.$row["id"].'" disabled></div>
                      <div class="mb-3">
                      <label class="form-label">Account Type</label>
                      <input type="text" class="form-control" name="type" value="'.$_POST['utype'].'" disabled>
                      </div>
                     </div>
               </div>
             </div>
             <div class="col-xl-4">
               <div class="row">
                 <div class="col-md-6 col-xl-12">
                     <div class="mb-3">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" name="name" value="'.$row["name"].'">
                       </div>
                       
                       
                       <div class="mb-3">
                         <label class="form-label">Email</label>
                         <input type="text" class="form-control" name="ID" value="'.$row["email"].'">
                         </div>
                         <div class="mb-3">
                           <label class="form-label">Phone</label>
                           <input type="text" class="form-control" name="ID" value="'.$row["phone"].'">
                           </div>
                           </div>
                     </div>
                   </div>
                   <div class="col-xl-4">
                     <div class="row">
                       <div class="col-md-6 col-xl-12">
                           <div class="mb-3">
                             <label class="form-label">Status</label>
                             <input type="text" class="form-control" name="ID" value="'.$row["status"].'">
                             </div>
                             <div class="mb-3">
                               <label class="form-label">Class</label>
                               <input type="text" class="form-control" name="ID" value="'.$row["class"].'">
                               </div>
                               
                               </div></div></div>
                               
                               <button type="submit" class="btn btn-primary ms-auto">Change</button>' ;
                 }
                
              }
              else
              {
                  echo "No user with this ID";
              }
              // closing connection
              mysqli_close($con);
            }
          
          else if($_POST['utype']=='admin')
              {
                  //Output Form Entries from the Database
              $sql = "SELECT username, email, id FROM admin WHERE id =  $sid";
              //fire query
              $result = mysqli_query($con, $sql);
              if(mysqli_num_rows($result) > 0)
              {
                 
                 while($row = mysqli_fetch_assoc($result)){
                   // to output mysql data in HTML table format
                     echo '
                      
                    <div class="col-6 col-sm-4 col-md-2">
                    <a href="./db/passr.php?type=ad&id='.$row["id"].'" class="btn btn-primary w-100">
                      Reset Password
                    </a>
                  </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-4">
                    <div class="row">
                      <div class="col-md-6 col-xl-12">
                      <div class="mb-3">
                     <label class="form-label">ID</label>
                     <input type="text" class="form-control" name="id"
value="'.$row["id"].'" disabled>
</div>
<div class="mb-3">
  <label class="form-label">Account Type</label>
  <input type="text" class="form-control" name="type" value="'.$_POST['utype'].'" disabled>
  
                     </div>
                     </div>
               </div>
             </div>
             <div class="col-xl-4">
               <div class="row">
                 <div class="col-md-6 col-xl-12">
                     <div class="mb-3">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" name="name" value="'.$row["username"].'">
                       </div>
                      <div class="mb-3">
                         <label class="form-label">Email</label>
                         <input type="text" class="form-control" name="email" value="'.$row["email"].'">
                         </div> 
                        </div>
                      </div>
                    </div>
                               
                               <button type="submit" class="btn btn-primary ms-auto">Change</button>' ;
                 }
                
              }
              else
              {
                  echo "No user with this ID";
              }
              // closing connection
              mysqli_close($con);
              }
          else if($_POST['utype']=='counsiler')
              {
                  //Output Form Entries from the Database
              $sql = "SELECT name, email, phone, id, assigned FROM counseler WHERE id =  $sid";
              //fire query
              $result = mysqli_query($con, $sql);
              if(mysqli_num_rows($result) > 0)
              {
                 
                 while($row = mysqli_fetch_assoc($result)){
                   // to output mysql data in HTML table format
                     echo ' 
                     <div class="col-6 col-sm-4 col-md-2">
                     <a href="./db/passr.php?type=co&id='.$row["id"].'" class="btn btn-primary w-100">
                           Reset Password
                         </a>
                       </div>
                   </div>
                   <div class="card-body">
                     <div class="row">
                       <div class="col-xl-4">
                         <div class="row">
                           <div class="col-md-6 col-xl-12">
                           <div class="mb-3">
                     <label class="form-label">ID</label>
                     <input type="text" class="form-control" name="id"
value="'.$row["id"].'" disabled>
</div>
<div class="mb-3">
  <label class="form-label">Account Type</label>
  <input type="text" class="form-control" name="type" value="'.$_POST['utype'].'" disabled>
  
                     </div>
                     </div>
               </div>
             </div>
             <div class="col-xl-4">
               <div class="row">
                 <div class="col-md-6 col-xl-12">
                     <div class="mb-3">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" name="name" value="'.$row["name"].'">
                       </div>
                       
                       
                       <div class="mb-3">
                         <label class="form-label">Email</label>
                         <input type="text" class="form-control" name="ID" value="'.$row["email"].'">
                         </div>
                         <div class="mb-3">
                           <label class="form-label">Phone</label>
                           <input type="text" class="form-control" name="ID" value="'.$row["phone"].'">
                           </div>
                           </div>
                     </div>
                   </div>
                   <div class="col-xl-4">
                     <div class="row">
                       <div class="col-md-6 col-xl-12">
                              
                               </div>
                              </div>
                            </div>
                               
                               <button type="submit" class="btn btn-primary ms-auto">Change</button>' ;
                 }
                
              }
              else
              {
                  echo "No user with this ID";
              }
              // closing connection
              mysqli_close($con);
            
              }
          else{
            echo "Some Thing Went Wrong";
          }
        }
        else
        {
          
        }
          
          ?>




                         
                
                        </div>
                      </div>
                    
                  </form>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
include "footer.php";
?>