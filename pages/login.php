<?php include_once 'include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 py-3 bg-white from-wrapper">
            <div class="container shadow-lg py-3">
            	<h3>Login</h3>
            	<hr>
                                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="">
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <input type="submit" value="login" name="submit" class="btn btn-primary" />
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="register.php">Don't have an account yet?</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>  
</div>
<?php include_once 'include/footer.php'; ?>