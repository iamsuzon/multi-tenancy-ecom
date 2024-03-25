<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Tenant;

class TenantManageService
{
    public static function getTenants()
    {
        return Tenant::with('tenantDomain')->ownTenants()->get();
    }

    public static function storeTenants(array $validated_data): array
    {
        try {
            $tenant = Tenant::create([
                'id' => $validated_data['username']
            ]);

            $tenant->update([
                'user_id' => auth('web')->id(),
                'email' => $validated_data['email']
            ]);

            $tenant->domains()->create([
                'domain' => $tenant->id .".". current(config('tenancy.central_domains'))
            ]);

            $response = [
                'status' => 'success',
                'message' => 'Tenant created successfully',
                'data' => $tenant
            ];
        } catch (\Exception $e) {
            $response = [
                'status' => 'danger',
                'message' => $e->getMessage()
            ];
        }

        return $response;
    }
}
