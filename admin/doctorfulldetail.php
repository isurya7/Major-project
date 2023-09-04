<?php 
    include_once 'include/header.php';
?>
    
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctor Detail</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
      </div>
<div class="mx-3 shadow p-3 m-2"> 
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card p-5 shadow-sm text-center">
                            <h3>Name :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>Email :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>Gender :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>Mobile :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>Address :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>ID type :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>ID Number :-<span class="text-info p-2">Doctor 1</span></h3>
                            <h3>Department :-<span class="text-info p-2">Doctor 1</span></h3>
                            <div >
                                <div class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary">Update</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                                </div>
                                
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card mb-4 shadow-sm">
                            <h3 class="text-muted text-center">Professional Image</h3>
                            <img class="card-img-top" src="../image/doctors/1.jpg"alt="Card image cap">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row p-4">
                                <input type="file" name="image" class="form-control col-md-8">
                                <input type="submit" name="change" value="change" class="btn btn-info col-md-4">
                                </div>
                            </form>
                            <h3 class="text-muted text-center">Profile Image</h3>
                            <img class="card-img-top" src="../image/doctors/1.jpg"alt="Card image cap">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
     
<?php      include_once 'include/footer.php'; ?>