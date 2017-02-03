<?php
require_once 'libs/recaptchalib.php';
require_once 'async.php';

        $pubkey = '6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM';
        $privkey = '6LeY-BMUAAAAAEfnisS53HbcJsVbTx_foPFwUNN_';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $challenge = recaptcha_get_html($pubkey, $error = null, $use_ssl = false);
//       $challenge = $_POST["rc-imageselect-target"];
        $response = $_POST['g-recaptcha-response'];
        
        $resp = recaptcha_check_answer($privkey, $remoteip, $challenge, $response);
     
          if ($_GET['do'] == 'login') {
        
            if (!$resp->is_valid){
                  //          die('Please note that you are human!');    
                    $coreAsync->authUser($_POST);
        } else {
                        echo 'You are not a robot!';
               

            }
          }
        



?>