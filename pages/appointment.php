<?php include_once 'include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 py-3 bg-white from-wrapper">
            <div class="container shadow-lg py-3">
            	<h3>Appointment Form</h3>
            	<hr>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Patient Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="mobile">Patient Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="Department">Select Department</label>
                            <select name="department" id="Department" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="doctor">Select Doctor</label>
                            <select name="doctor" id="doctor" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="idtype">Select id type</label>
                            <select name="idtype" id="idtype" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="idnum">Id number</label>
                            <input type="text" name="idnum" id="idnum" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="doctor">Select Patient Gender</label>
                            <select name="doctor" id="doctor" class="form-control">
                                <option value="">Choose One</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="age">Patient Age</label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="doctor">Appointment Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                        <div class="col-md-6 form-group mt-4 pt-2">
                             <input type="submit" value="book" name="book" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>  
</div>
<?php include_once 'include/footer.php'; ?>