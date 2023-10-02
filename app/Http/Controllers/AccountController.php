<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalInfoUpdate;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function editProfile()
    {
        $user = User::with('account')->find(auth()->user()->id);
        return view('your-view', compact('user'));
    }

    public function update(PersonalInfoUpdate $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}




