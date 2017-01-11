<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11.01.2017
 * Time: 15:38
 */
class Controller_Client extends Controller
{
    public function __construct(){
        $this->check_user_role();
    }

    public function action_index(){

    }

}
