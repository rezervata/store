<?php

class DB
{
    private $host = 'localhost';
    private $user = 'medicine';
    private $pass = '';
    private $dbname = 'medicine';
    
    private $db = false;
    
    
    public function __construct()
    {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        
        if (!$this->db) {
            die('cannot connect to database server');
        }
    }
    
    
    public function __destruct()
    {
    if ($this->db) {
            $this->db->close();
        }
    }
    
    public function escString($str)
    {
        $str = $this->db->real_escape_string($str);

        return $str;
    }
    
    public function refValues($arr)
    {
        if (strnatcmp(phpversion(), '5.3') >= 0) {
            $refs = array();
            
            foreach ($arr as $key => $value) {
                $refs[$key] = &$arr[$key];
            }
            
            return $refs;
        }
        
        return $arr;
    }
    
    public function paramTypes($params = array())
    {
        $types = '';
        
        foreach ($params as $param) {
            if (is_numeric($param)) {
                $types .= 'd';
            } elseif (is_string($param)) {
                $types .= 's';
            } else {
                $types .= 'b';
            }
        }
        
        return $types;
    }
    
    public function select($sql, $params = array())
    {
        $out = array();
        $st = $this->db->prepare($sql);
        
        // var_dump($st);
        $refValue = $this->refValues($params);

        if (!empty($params)) {
            $types = $this->paramTypes($params);
            $arrMerge = array_merge(array($types), $refValue);

            foreach ($arrMerge as $key => $value) {
                $tmp[$key] = &$arrMerge[$key];
            }

            call_user_func_array(array($st, "bind_param"), $tmp);
            
            // call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
        }
       
        if (!$st->execute()) {
            $err[] = "Execute failed. ERROR: " . $st->error;
        }
        
        $result = $st->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $out[] = $row;
        }

        $st->close();

        return $out;
    }

    public function insert($sql, $params = array())
    {
        $st = $this->db->prepare($sql);
        $types = $this->paramTypes($params);
        
        if (!empty($params)) {
            call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
        }

        $st->execute();
        $st->close();

        return $this->db->insert_id;
    }
    
    // 	delete syshtoto
    public function update($sql, $params = array())
    {
        $st = $this->db->prepare($sql);
        $types = $this->paramTypes($params);
        
        if (!empty($params)) {
            call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
        }
        
        $st->execute();
        // $result = $this->db->affected_rows;
        $st->close();
        
        return $this->db->affected_rows;
    }
    
    public function getAsoc($sql, $params = array())
    {
        $res = array();
        $st = $this->db->prepare($sql);
        
        if (!empty($params)) {
            $types = $this->paramTypes($params);
            call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
        }
        
        $st->execute();
        $result = $st->get_result();
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            
            $st->close();
        } else {
            return false;
        }
        
        return $res;
    }
    
    public function createSnartyRsArray($rs)
    {
        if (!$rs) {
            return false;
        }
        
        $smartyRs = array();
        while ($row = $rs->fetch_assoc()) {
            $smartyRs[] = $row;
        }
        
        return $smartyRs;
    }
}

// class
