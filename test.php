<?php
function recaptcha($p) {
    if (isset($_POST['submit'])){
        $secret = '6LeY-BMUAAAAAEfnisS53HbcJsVbTx_foPFwUNN_';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        
        $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    
        $rec_res = json_decode($url, TRUE);
        
        if  ($rec_res['success'] == 1){
            
        }
        
        
    }
}




?>