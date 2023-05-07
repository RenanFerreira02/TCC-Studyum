<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth\UserQuery;

class UserController extends Controller
{
    public function getUser()
    {
        $userQuery = UserQuery::all();
    }
}
