<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as MainBaseController ;

abstract class AdminBaseController extends MainBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('status');
    }
}
