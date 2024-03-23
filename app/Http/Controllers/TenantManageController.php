<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\TenantManageRequest;
use App\Http\Services\TenantManageService;
use Illuminate\Http\Request;

class TenantManageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        $tenants = TenantManageService::getTenants();
        return view('landlord.tenant-manage.create', compact('tenants'));
    }

    public function store(TenantManageRequest $request)
    {
        $validated = $request->validated();

        // Create a new tenant
        $response = TenantManageService::storeTenants($validated);

        return back()->with(['type' => $response['status'], 'msg' => $response['message']]);
    }
}
