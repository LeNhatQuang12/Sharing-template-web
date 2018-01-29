<?php
require 'inc/autoload.php';
getView('header');
?>
<div class="row">
    <div class="box">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="text-center">
                <h2>Register</h2>
                <hr>
            </div>
            <div>
                <form action="<?php echo getRootUri('/auth.php?action=register'); ?>" method="POST" class="form-horizontal">
                    <input type="hidden" name="permission_id" value="1">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="username">Username:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="pwd">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="fullname">Full name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php getView('footer');