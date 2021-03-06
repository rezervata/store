<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<div class="container">
    {if isset($CLREGISTER)}<h2>{*{$CLREGISTER|getError}*}</h2>{/if}
    <form class="form-horizontal" role="form" name='register' id="regform" action='' method='post'
    accept-charset='UTF-8'>
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="fname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="fname" name='fname' placeholder="First Name" class="form-control" autofocus>
                <span class="help-block">First Name, eg.: Harry</span>
            </div>
        </div> <!-- /.form-group -->
        
         <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="lname" name='lname' placeholder="Last Name" class="form-control" autofocus>
                <span class="help-block">Last Name, eg.: Smith</span>
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
                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password"  name="pass" id="pass" placeholder="Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" name="pass2" id="pass2" placeholder="Confirm Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->
        
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country *</label>
            
            <div class="col-sm-9">
                <input type="text" name="xCountry" id="country" placeholder="Country" class="form-control">
            </div>
        </div> <!-- /.form-group -->    
        
        <div class="form-group">
            <label for="eur" class="col-sm-3 control-label">in Europe *</label>
            
            <div class="col-sm-9">
                <input type="checkbox" name="chEurope" checked="checked" id="eur" class="form-control">
            </div>
        </div> <!-- /.form-group -->
          
        <div class="form-group">
            <label for="state" class="col-sm-3 control-label">State/Province *</label>
            
            <div class="col-sm-9">
                <input type="text" name="xState" id="state" placeholder="State/Province" class="form-control">
            </div>
        </div> <!-- /.form-group -->    
        
        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">City *</label>
            
            <div class="col-sm-9">
                <input type="text" name="xCity" id="city" placeholder="City" class="form-control">
            </div>
        </div> <!-- /.form-group -->    
        
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address *</label>
            
            <div class="col-sm-9">
                <input type="text" name="xStreet" id="address" placeholder="Address" class="form-control">
            </div>
        </div> <!-- /.form-group -->    
              
        <div class="form-group">
            <label for="zip" class="col-sm-3 control-label">Zip/post Code *</label>
            
            <div class="col-sm-9">
                <input type="text" name="xZipcode" id="zip" placeholder="Zip/post Code" class="form-control">
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
            <div class="g-recaptcha" data-sitekey="6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM"></div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" id="register" href="#" class="btn btn-primary btn-block">Register</button>
            </div>
        </div> <!-- /.form-group -->
 
    </form> <!-- /form -->
    
</div> <!-- ./container -->







        
       
       