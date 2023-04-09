<?php

namespace App\Controllers;

use App\Models\SlotModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;


//use UserModel;

class SlotController extends Controller
{
    public function index(Request $request){
        return $this->view('slots.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'slots' => SlotModel::all()]);

    }

}
