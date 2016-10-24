<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.10.2016
 * Time: 15:36
 */

class Basa {
    public $a,$b,$c;
    public function __construct($set_a,$set_b){
        $this->a = $set_a;
        $this->b = $set_b;
    }
    public function sum(){
        $this->c = $this->a+$this->b;
    }
}