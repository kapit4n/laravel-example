<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller {

    /**
     * Show the profile for the given user.
     */
    public function showHello()
    {
        return view('hi', array('name' => 'Luis'))->nest('subview', 'child.hi');
    }

}