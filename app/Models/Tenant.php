<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    protected $fillable = ['id', 'email', 'user_id', 'data'];

    protected $casts = [
        'email' => 'string',
        'user_id' => 'integer',
        'data' => 'array'
    ];

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'email',
            'user_id',
            'created_at',
            'updated_at'
        ];
    }

    public function scopeOwnTenants($query)
    {
        return $query->where('user_id', auth('web')->id());
    }

    public function tenantDomain(): HasOne
    {
        return $this->hasOne(TenantDomain::class, 'tenant_id', 'id');
    }
}
