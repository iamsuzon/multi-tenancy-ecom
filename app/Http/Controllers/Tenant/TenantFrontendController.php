<?php

declare(strict_types=1);

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantFrontendController extends Controller
{
    public function index()
    {
        return view('tenant.home');
    }
}
