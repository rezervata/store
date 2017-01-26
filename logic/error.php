<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getError($key)
{
    $errors = array(
        1000    => 'All ok',
        1001    => 'Molq, popylnete poletata',
        1002    => 'Parolite kapaldy',
        1003    => 'Greshka v DB.',
        1004    => 'Clientyt syshtestvuva.',
        1005    => 'Usera ne e administrator.',
        1006    => 'Usera ne sashtestvuva.'
    );
    
    return $errors[$key];
}
