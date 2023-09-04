   <?php include_once './include/header.php';?>
          
<div class="mx-3 shadow-lg p-3 m-2"> 
    <div class="row">
        <div class="col-12 col-md-12">
            <h1 class="text-center">User Dashboard </h1>
        </div>
    </div>
</div>
<div class="mx-3 shadow p-3 m-2"> 
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3>Rohit Kumar</h3>
                            <p class="card-text">lmprkmkp@gmail.com</p>
                            <p class="card-text">70074205XX</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Change Password</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-md-3"></div>
               <div class="mx-5 shadow table-responsive">
                   <table class="table  table-bordered table-hover table-primary">
                       <thead>
                           <tr>
                               <th>Appointment Id</th>
                               <th>Patient Name</th>
                               <th>Patient Age</th>
                               <th>Patient Gender</th>
                               <th>Appointment Date</th>
                               <th>Appoint Doctor Name</th>
                               <th>Deportment</th>
                               <th>Appointment Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>101</td>
                               <td>Rohit Kumar</td>
                               <td>30</td>
                               <td>male</td>
                               <td>25/07/2021</td>
                               <td>Dr .Ayush Patel</td>
                               <td>General Surgery</td>
                               <td>Not Completed</td>
                           </tr>
                       </tbody>
                   </table>

               </div>
                
            </div>
        </div>
    </div>
</div>
<?php include_once 'include/footer.php'; ?>