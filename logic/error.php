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
        1001    => 'Please fill in all fields',
        1002    => 'Incorrect password',
        1003    => 'DB Error',
        1004    => 'Client already exist.',
        1005    => 'User is not administrator.',
        1006    => 'User does not exist.'
    );
    
    return $errors[$key];
}
