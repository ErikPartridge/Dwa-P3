<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/16/14
 * Time: 6:58 PM
 */

class LipsumController extends BaseController {


    public function makeLipsum(){
         $number = Input::get('nums');
         return View::make('lipsum', array('paragraphs' => $number));
    }
} 