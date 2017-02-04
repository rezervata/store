<?php
require_once 'libs/recaptchalib.php';
require_once 'async.php';

        $pubkey = '6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM';
        
        
 //       echo recaptcha_get_html($pubkey);
        
        
        $privkey = '6LeY-BMUAAAAAEfnisS53HbcJsVbTx_foPFwUNN_';
        $remoteip = $_SERVER['REMOTE_ADDR'];
//        $b = recaptcha_get_html($pubkey, $error = null, $use_ssl = false);
//        $c = array($b);
        
//        $challenge = $a['recaptcha_challenge_field'];
        $r = $_POST['g-recaptcha-response'];
        
        $url = file_get_contents("https://google.com/recaptcha/api/siteverify?secret=$privkey&response=$response&remoteip=$remoteip");
  //      $resp = recaptcha_check_answer($privkey, $remoteip, $challenge, $response);
         $d = json_decode($url, TRUE); 
         $challenge = $d["success"];
      
         $resp = recaptcha_check_answer($privkey, $remoteip, $challenge, $r);
        
        if ($_GET['do'] == 'login') {
        
            if (!$resp->is_valid){
                  //          die('Please note that you are human!');    
                    $coreAsync->authUser($_POST);
        } else {
                        echo 'You are not a robot!';
               

            }
          }
        



?>