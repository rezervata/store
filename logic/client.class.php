<?php

class Client
{
    private $db;
    private $data;

    public function __construct($db, $data = array())
    {
        $this->db = $db;
        $this->data = $data;
    }

    public function newClient($db, $data = array())
    {
        if (empty($data['fname']) || empty($data['lname']) || empty($data['email']) || empty($data['phone']) || empty($data['pass']) || empty($data['pass2'])) {
            return 1001;
        }

        if ($data['pass'] != $data['pass2']) {
            return 1002;
        }

        $check = $db->select("select id from clients where email = ?", array($data['email']));

        if (!empty($check)) {
            return 1004;
        }
        
        $date = date("Y-m-d H:i");
        $res = $db->insert("insert into clients (fname, lname, email, phone, pass, registered, status) values (?, ?, ?, ?, ?, ?, ?) ", array($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], md5($_POST['pass']), $date, 1));
        
        if (!$res) {
            return 1003;
        }

        return 1000;
    }

    public function authAdm($data = array(), $db)
    {
        if (empty($data['user']) || empty($data['pass'])) {
            return 1001;
        }
              
        $adminCheck = $db->select("select id, user from adm_users where user= ? and pass = MD5(?)", array($data['user'], $data['pass']));
        
        if (empty($adminCheck)) {
            return 1005;
        }

        return 1000;
    }

    public function clientLogin($db, $data = array())
    {
        if (empty($data['email']) || empty($data['pass'])) {
            return 1001;
        }

        $user = $db->select("select fname, lname, email, pass from clients where email= ? and pass= ? ", array($_POST['email'], md5($_POST['pass'])));
        
        if (empty($user)) {
            return 1006;
        }
        
        return 1000;
    }
}
