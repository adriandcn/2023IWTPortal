<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cashes';

    protected $fillable = array('id_reserva', 'nombreCalendario', 'estadoPago', 'fechaPago','montoPago');
}
