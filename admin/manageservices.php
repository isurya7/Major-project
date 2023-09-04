<?php include_once 'include/header.php'; ?>
    <div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-10 offset-md-1 mt-5 py-3 bg-white from-wrapper">
            <div class="container shadow-lg py-3">
            	<h3>Manage Department</h3><hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Department Id</th>
                            <th>Department Name</th>
                            <th>Date Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>xyz</td>
                            <td>dd/mm/yyyy</td>
                            <td></td>
                        </tr>
                    <form action="" method="post">
                        <tr>
                            <td>#</td>
                            <td class="align-middle">
                            <input type="text" class="form-control mt-0" placeholder="Enter Department Name" name="department"  >
                            </td>
                            <td>
                            <input type="text" class="form-control mt-0" placeholder="Date" name="date"  >
                            </td>
                            <td class="align-middle text-center">

                                <button class="btn btn-success"  type="submit" name="add_department" value="add_department">Add</button>
                                <button class="btn btn-danger" type="button" onclick="javascript:window.location='manageservices.php';">Back</button>
                            </td>
                        </tr>
                    </form>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>  
</div>
     
<?php include_once 'include/footer.php'; ?>