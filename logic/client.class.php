<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of client
 *
 * @author tdd
 */
class Client {
    private $db;
    private $data;
    
    function __construct($data = array(), $db){
        $this->db = $db;
        $this->data = $data;
    }
    
    function newClient($data  = array(), $db){
        if(empty($data['name']) || empty($data['mail']) || empty($data['phone']) || empty($data['pass']) || empty($data['pass2'])){
            return 1001;
        }

        if($data['pass'] != $data['pass2']){
            return 1002;
        }    

        $check = $db->select("select cli_id from clients where mail = ?", array($data['mail']));
        if(!empty($check)){
            return 1004;
        } 

        $res = $db->insert("insert into clients (name, mail, phone, pass) values ( ? , ? , ? , ?) ", array($_POST['name'], $_POST['mail'], $_POST['phone'], md5($_POST['pass'])));
        if(!$res){
            return 1003;
        }

        return 1000;
    }
}
