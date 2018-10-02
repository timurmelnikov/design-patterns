<?php

class Admin
{
    public $addAdmins = true;
    public $addModerators = true;
    public $addPosts = true;
    public $addComents = true;
}

class Moderator
{
    public $addAdmins = false;
    public $addModerators = false;
    public $addPosts = true;
    public $addComents = true;
}

class User
{
    public $addAdmins = false;
    public $addModerators = false;
    public $addPosts = false;
    public $addComents = true;
}
class Guest
{
    public $addAdmins = false;
    public $addModerators = false;
    public $addPosts = false;
    public $addComents = false;
}


class Factory{
    public static function createUsers($role){
        if(class_exists($role)){
            return new $role;
        } else{
            throw new Exception('Роль '.$role.' не определена.');
        }
    }
}