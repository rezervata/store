<html>
  <body>
    <form action="" method="post">
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'libs/recaptchalib.php';

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM";
$privatekey = "6LeY-BMUAAAAAEfnisS53HbcJsVbTx_foPFwUNN_";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        isset($_POST["recaptcha_challenge_field"]),
                                        $_POST["g-recaptcha-response"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
