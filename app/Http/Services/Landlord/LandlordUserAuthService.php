<?php

declare(strict_types=1);

namespace App\Http\Services\Landlord;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LandlordUserAuthService
{
    public static function register(array $validated): bool
    {
        // Create a new user
        User::create($validated);

        // Log the user in
        if (Auth::guard('web')->attempt($validated))
        {
            session()->regenerate();
            return true;
        }

        return false;
    }
}
