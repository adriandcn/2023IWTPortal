<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Model;

class DeliveryBooking extends Model
{
    protected $table = 'delivery_book';
    
    protected $fillable = array('id', 'id_reserva', 'enviado');

}