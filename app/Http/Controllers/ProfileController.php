<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{
    //
    public function getProfile()
    {
        $user = Auth::user();
        return $this->sendResponse($user, 'User profile retrieved successfully.');
    }
}
