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

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->dob = $request->dob;
        $user->college = $request->college;
        $user->graduation_year = $request->graduation_year;
        $user->degree = $request->degree;
        $user->department = $request->department;
        $user->images = $request->images;
        $user->save();
        return $this->sendResponse($user, 'User profile updated successfully.');
    }
}
