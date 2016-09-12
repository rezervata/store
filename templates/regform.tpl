<div class="container">
    {if isset($CLREGISTER)}<h2>{$CLREGISTER|getError}</h2>{/if}
    <form class="form-horizontal" role="form" id='register' action='/register/' method='post'
    accept-charset='UTF-8'>
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="name" name='name' placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input type="text" id="phone" name='phone' placeholder="Phone number" class="form-control" autofocus>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" name="mail" placeholder="Email" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password"  name="pass" id="password" placeholder="Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" name="pass2" id="confirmPassword" placeholder="Confirm Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I accept <a href="#">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div> <!-- /.form-group -->
 
    </form> <!-- /form -->
    
</div> <!-- ./container -->