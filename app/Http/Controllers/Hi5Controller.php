<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Hi5Controller extends Controller {

    public function getIndex()
    {
        return view('hi', array('name' => 'Hi5 Controller'))->nest('subview', 'child.hi');
    }

}