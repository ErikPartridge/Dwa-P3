<?php
/**
 * Created by PhpStorm.
 * User: Erik
 */

class LipsumController extends BaseController {

    //Gets the input out of the post function, and makes the view
    public function makeLipsum(){
         $number = Input::get('nums');
         return View::make('lipsum', array('paragraphs' => $number));
    }
} 