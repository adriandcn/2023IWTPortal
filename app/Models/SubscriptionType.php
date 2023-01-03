<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
    protected $table = 'subscription_types';
    protected $primaryKey = 'id_subscription_type';

    protected $fillable = [
    	'id_subscription_type',
		'type_name',
		'type_description',
		'status',
		'created_at',
		'updated_at'
    ];

    protected $hidden = [
		'status',
		'created_at',
		'updated_at'
    ];
}
