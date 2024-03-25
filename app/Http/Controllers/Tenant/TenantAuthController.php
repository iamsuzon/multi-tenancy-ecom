<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('tenant.auth.register');
    }
}
