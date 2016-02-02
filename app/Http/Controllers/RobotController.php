<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Robot;

class RobotController extends Controller
{
    //
    public function index() {

        $robot = new Robot();
        return $robot->send();
    }
}
