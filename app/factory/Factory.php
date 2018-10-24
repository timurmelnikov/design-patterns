<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 24.10.18
 * Time: 16:29
 */

namespace app\factory;



class Factory{
    public static function createUsers($role){

        $role = 'app\\factory\\'.$role;
        if(class_exists($role)){
            return new $role;
        } else{
            throw new Exception('Роль '.$role.' не определена.');
        }
    }
    public function getName(){

        $a = new Admin();
        return "Timur";
    }
}