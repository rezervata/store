<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
<div class="container">
    {if isset($CLIENTLOGIN)}<h2>{*{$CLIENTLOGIN|getError}*}</h2>{/if}
    <form class="form-signin" name="loginform" method="post" action="" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
            <div class="g-recaptcha" data-sitekey="6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM"></div>

        <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
    </form>

</div>
