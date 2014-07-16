<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/16/14
 * Time: 6:50 PM
 */

class UserController extends BaseController {

    //Get data from post, and use it to make users
    public function makeUsers(){
        $number = Input::get('users');
        return View::make('user', array('number' => $number));
    }
} 