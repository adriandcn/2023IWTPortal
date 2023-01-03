<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $primaryKey = 'id_subscription';

    public static $rules = [
		'atraction_name' => 'required',
		'email' => 'required',
		'phone' => 'required',
		'movil' => 'required',
		'payment' => 'required',
		'date_ini' => 'required',
		'date_end' => 'required',
		'subscription_time' => 'required'
    ];

    public static $messages = [
        'atraction_name' => 'Nombre del servicio es obligatorio',
		'email.required' => 'Email del subscriptor es obligatorio',
		'phone.required' => 'Teléfono convencional es obligatorio',
		'movil.required' => 'Celular es obligatorio',
		'payment.required' => 'El campo pago es obligatorio',
		'date_ini.required' => 'Fecha inicial es obligatoria',
		'date_end.required' => 'Fecha de finalización es obligatoria',
		'subscription_time.required' => 'El tiempo de  suscripción es oblgatorio'
    ];

    protected $fillable = [
    	'id_subscription',
		'atraction_name',
		'email',
		'phone',
		'movil',
		'payment',
		'payment_marketing',
		'date_ini',
		'date_end ',
		'subscription_time',
		'status',
		'created_at',
		'updated_at'
    ];

    protected $hidden = [
		'date_ini',
		'date_end ',
		'status',
		'created_at',
		'updated_at'
    ];
}
