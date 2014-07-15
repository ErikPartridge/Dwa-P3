<?PHP

    $num = Input::get('usr');

    return Redirect::to('/user/'.$num);

?>