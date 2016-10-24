<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.10.2016
 * Time: 16:25
 */
require_once "Basa.php";
class Pbasa extends Basa {
    public $res;
    public function __construct($set_a,$set_b){
        parent::$a = $set_a;
        parent::$b = $set_b;
    }
      public function umno(){
        $this->res = parent::$a *parent::$b;

    }

}
?>
