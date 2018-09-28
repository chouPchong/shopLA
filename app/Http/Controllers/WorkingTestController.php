<?php
/**
 * Created by PhpStorm.
 * User: xiaojinger
 * Date: 2018/9/28
 * Time: 上午11:08
 */

namespace App\Http\Controllers;


class WorkingTestController extends Controller
{
    public function locationTest()
    {
        return view('working_test.location_test');
    }
}