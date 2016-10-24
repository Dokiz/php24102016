<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.10.2016
 * Time: 15:42
 */
/* require_once "Pro_Basa.php"; */
require_once "Basa.php";
    $obj = new Basa(2,3);
    $obj->sum();
    echo $obj->c;

    $obj2 = new Pro_Basa(2,3);
    $aaa = $obj2->umo();
     echo $aaa;
?>