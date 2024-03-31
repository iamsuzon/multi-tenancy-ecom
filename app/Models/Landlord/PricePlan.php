<?php

namespace App\Models\Landlord;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'status',
        'description',
        'badge',
        'features',
        'price',
        'faq',
        'has_trial',
        'trial_days',
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'type' => 'boolean',
        'status' => 'boolean',
        'description' => 'string',
        'badge' => 'string',
        'price' => 'double',
        'faq' => 'string',
        'has_trial' => 'boolean',
        'trial_days' => 'integer',
        'features' => 'array',
    ];
}
