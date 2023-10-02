<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phoneNumber' => ['required', 'string'], // Add validation for phone number
            'address' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Generate card-related information
        $accountNumber = rand(pow(10, 9), pow(10, 10)-1);
        $cardNumber = rand(pow(10, 11), pow(10, 12)-1);
        $expiresAt = now()->addYears(5);
        $balance = 10000000; // 10 million Rupiah

        // Create card and associate it with the user
        $user->card()->create([
            'accountNumber' => $accountNumber,
            'cardNumber' => $cardNumber,
            'expiresAt' => $expiresAt,
            'balance' => $balance,
        ]);

        // Insert phone number and address into the account table
        $user->account()->create([
            'phoneNumber' => $request->phoneNumber,
            'address' => $request->address,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
    
}
