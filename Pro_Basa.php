<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.10.2016
 * Time: 15:39
 */
require_once "Basa.php";
class Pro_Basa extends Basa {
    public $res;
    public function __construct($set_a,$set_b){
        parent::a = $set_a;
        parent::b = $set_b;
    }
    public function umo(){
        $return parent::$a*parent::$b;
    }

}