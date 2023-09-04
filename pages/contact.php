<?php include_once 'include/header.php'; ?>
<div class="container bg-transparent">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 py-3 bg-white from-wrapper">
            <div class="container shadow-lg">
            	<h3>Contact Us</h3>
            	<hr>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="massage">Massage </label>
                        <textarea id="massage" name="massage" rows="5" cols="10" class="form-control"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-sm-4 pb-3">
                            <input type="submit" value="Send" name="send" class="btn btn-primary">
                        </div>
                       
                    </div>
                </form>
            </div>
            
        </div>
    </div>  
</div>
<?php include_once 'include/footer.php'; ?>