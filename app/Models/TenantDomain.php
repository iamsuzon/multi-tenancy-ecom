<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantDomain extends Model
{
    protected $table = 'domains';
    protected $fillable = ['id', 'tenant_id', 'domain'];
}
