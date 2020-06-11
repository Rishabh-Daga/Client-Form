<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'number', 'web/app', 'type', 'business_name', 'product/service', 'additional_features', 'reference_websites'
    ];
}
