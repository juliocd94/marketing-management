<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Country;
use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\BusinessProfile;
use App\Models\PersonalProfile;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => ['required', 'string', Rule::in(array_column(UserType::cases(), 'value'))],
            'registration_country' => ['nullable', 'string', Rule::in(array_column(Country::cases(), 'value'))],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type
        ]);

        if ($user->user_type == UserType::BUSINESS) {
            BusinessProfile::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'registration_country' => Country::from($request->registration_country)->value,
            ]);
        } else if($user->user_type === UserType::INDIVIDUAL) {
            PersonalProfile::create([
                'user_id' => $user->id,
                'first_name' => $request->name,
                'last_name' => $request->last_name,
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!'
        ]);
    }
}
