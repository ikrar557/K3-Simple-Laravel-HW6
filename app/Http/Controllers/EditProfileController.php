<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function editprofile()
    {
        return view('layouts.pages.editprofile');
    }
}
