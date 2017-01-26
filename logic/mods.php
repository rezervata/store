<?php
require_once 'db.class.php';
//require_once 'item.class.php';
//require_once 'folder.class.php';
//require_once 'msg.class.php';
require_once 'Image.class.php';
require_once 'client.class.php';
//require_once 'leasing.class.php';

function toLimit($page, $items)
{
    if ($page < 1) {
        $page = 1;
    }
    
    $start = abs($page - 1) * $items;
    return " limit $start, $items";
}

function toJson($res, $msg, $class = 'error')
{
    $arr = array("res" => $res, "msg" => $msg, "class" => $class);
    return json_encode($arr);
}

function aAuth()
{
    return sha1('yes');
}

function myid()
{
    $a = microtime(false);
    $b = substr($a, 2, strlen($a)-1);
    $b = str_replace(" ", "", $b);
    return $b;
}

function toPrice($val)
{
    $t = number_format($val, 2, '.', '');
    $a = explode('.', $t);
    return $a[0] . '.<sup>'.$a[1].'</sup>';
}

function toFriendly($str)
{
    $str = strtolower($str);
    $str = trim($str, '-');
    $str = preg_replace('/[^a-z0-9]+/', '-', $str);
    return $str;
}

function getPromoTypes()
{
    return array(
    1 => 'Слайдер (1 продукт на слайд)',
    2 => 'Слайдер от промоции',
    3 => 'Виртуална промо категория',
    4 => 'Youtube промоция',
    5 => 'Full screen Промоция',
    6 => 'Full screen Слайдер'
    );
}
function getPromoType($id)
{
    $r = getPromoTypes();
    return $r[$id];
}

function orderStatus($val)
{
    if ($val == 1) {
        return 'Очаква плащане';
    } elseif ($val == 2) {
        return 'Одобрена';
    } elseif ($val == 3) {
        return 'Обработване';
    } elseif ($val == 4) {
        return 'Изпълнена';
    } else {
        return 'Отказана';
    }
}

function getShipType($i)
{
    $types = array(
    2 => 'Експресна',
    3 => 'Икономична',
    26 => 'Експресна фиксиран час',
    36 => 'Икономична фиксиран час',
    65500 => 'От магазин Dekom',
    65501 => 'Безплатна доставка',
    65502 => 'Доставка DEKOM'
    );
    
    return $types[$i];
}

function short2time($v)
{
    return substr($v, 0, 2) . ':' . substr($v, 2, 2);
}

function orderTypes($val)
{
    if ($val == 1) {
        return 'Плащане в брой';
    } elseif ($val == 2) {
        return 'Банков превод';
    } elseif ($val == 3) {
        return 'Онлайн плащане';
    } elseif ($val == 4) {
        return 'TBI лизинг';
    } else {
        return 'Отказана поръчка';
    }
}

function prNum($val)
{
    return number_format($val, 2, '.', '');
}

function inBoxFormat($val)
{
    $o = '';
    $val = trim($val);
    $t = explode("\n", $val);
    
    foreach ($t as $r) {
        if (!empty($r)) {
            $o .= "<li>".trim($r)."</li>\n";
        }
    }
    
    return "<ul>
    $o
    </ul>\n";
}

function descr2p($val)
{
    return str_replace("\n", '</p><p>', $val);
}


function makeFKeys($arr, $n)
{
    if (isset($arr) && count($arr) > 0 && in_array($n, $arr)) {
        return true;
    }
    
    return false;
}

function filterKeys($data, $id, $val)
{
    $k = 'cOpts' . $id;
    if (isset($data[$k]) && in_array($val, $data[$k])) {
        return true;
    }
    
    return false;
}
